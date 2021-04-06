<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Clas;
use App\Course;


use Illuminate\Validation\Rule;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::latest()->paginate(4);

       // dd($teachers[0]->latestStatus[0]->name);
        //return view('teachers.index')->with('teachers',$teachers);

        return view('teachers.index',compact('teachers'))->with('i',(request()->input('page',1) - 1 ) * 4);
       

        //$teachers->class();
        //dd(Clas::find(5));        
        //return view('teachers.index');
        // dd($teachers->classTeacher->section);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('teachers.create');
        $data = Course::all();
        return view('teachers.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:teachers,email',
            //'class'=>'required',
            'phone'=>'required | min:11 |numeric',
            'dob'=>'required | date',
           // 'image'=>'required | image | mimes:jpeg,png,jpg,gif|max:2048'

        ],[
            'name.required'=>'Please Enter the Name..',
            'email.required'=>'Please Enter Email Address',
            'phone.required'=>'Please Your Phone Number',
            'dob.required'=>'Please Enter date of birth',
            //'class.required'=>'Please enter Class',
           
        ]
        
        );

        $imageName = '';

        if($request->image){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
        }
        

        $data= new Teacher;
        $data->name = $request->name;
        $data->email = $request->email;
        
        $data->class= $request->class;
        
        //$data->classTeacher()->save($classTeacher);
        //$data->classTeacher()->save($request->class_id);
        

        $data->phone = $request->phone;
        $data->dob = $request->dob;
        
        //$data->course_id = $request->course_id;
        
        $data->image = $imageName;


        $data->save();
        $data->courses()->attach($request->course_id);
       
        //$regist = Regist::whereName($name)->first();
        return redirect()->route('teachers.index')->with('success','Teacher Created Successfully');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //return view('teachers.edit', compact('teacher'));
        $data = Course::all();
        return view('teachers.edit', ['data' => $data],compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
         //$teacher = Teacher::find((int) request()->segment(2));
        //dd($student);

        $emailRule = Rule::unique((new Teacher)->getTable());

        $request->validate([
            'name'=>'required',
            'email'=>'required','email','$emailRule ',
                'class'=>'required',
            'phone'=>'required | min:11 |numeric',
            'dob'=>'required | date',

            ]);

           // dd($request->image->extension() );
        $imageName = '';

            if($request->image){
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'),$imageName);
                $teacher->image = $imageName;   
            }
    
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->class= $request->class;
        $teacher->phone = $request->phone;
        $teacher->dob = $request->dob;

        $teacher->update();
        $teacher->courses()->sync($request->course_id);
        return redirect()->route('teachers.index')->with('success','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success','Student Deleted Successfully');
    }
 
}
