<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clas;
use App\Teacher;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $class = Clas::latest()->paginate(10);
        return view('class.index',compact('class'))->with('i',(request()->input('page',1) - 1 ) * 4);
        
        
        //return view('class.index',compact('class'))->with('i',(request()->input('page',1)-1)*10);
        //return view('teachers.index');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Teacher::all();
        return view('class.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $classTeacher = new App\ClassTeacher();
        
        $request->validate([
            'name'=>'required',
            'section'=>'required',
            //'teacher_id'=>'required',
            

        ],[
            'name.required'=>'Please Enter the Name..',
            'section.required'=>'Please Enter Section',
           // 'teacher_id.required'=>'Please Enter Teacher Name',
           
            

        ]
        
        );

     


        $data= new Clas;



        //$data->teacher_id = $request->teacher_id;
        $data->name = $request->name;
        

        $data->section = $request->section;
        //$data->teacher_name= $request->teacher_name;
       

      
        $data->save();
        //$data->teacher()->attach($request->teacher_id);
        //$data->classTeacher()->save($classTeacher);
        return redirect()->route('class.index')->with('success','Class Created Successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clas $class)
    {
        return view('class.show', compact('class'));
    }


    // public function addTeacher(){
    //     $data = Teacher::all();
    //     return view('class.create',['data'=>$data]);
 
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('class.edit', compact('class'));
        $class = Clas::find($id);
        // $data = Teacher::all();
        // return view('class.edit', ['data' => $data],['class'=>$class]);
    
        $data = Teacher::all();
        return view('class.edit', ['data' => $data],compact('class'));
    }

    /**
     * Update the specified resource in storage.    
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clas $class)
    {
        


        $request->validate([
            'name'=>'required',
            'section'=>'required',
            //'teacher_id'=>'required',
            
            

        ],[
            'name.required'=>'Please Enter the Name..',
            'section.required'=>'Please Enter Section',
            //'teacher_id.required'=>'Please Enter Teacher Name',
           
            

        ]
        
        );

     


       
        $class->name = $request->name;
        $class->section = $request->section;
        $class->teacher_id= $request->teacher_id;
       
        $class->update();
        return redirect()->route('class.index')->with('success','Class Created Successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  
        $class = Clas::findOrFail($id);
        $class->delete();
        return redirect()->route('class.index')->with('success','Class Deleted Successfully');

    }
}
