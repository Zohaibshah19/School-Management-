<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Teacher;



class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $courses = Course::latest()->paginate(4);


        return view('courses.index',compact('courses'))->with('i',(request()->input('page',1) - 1 ) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('courses.create');
       $data = Teacher::all();
       return view('courses.create', ['data' => $data]);
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
        ],[
            'name.required'=>'Please Enter the Course Name..',
        ]
        
        );

     


        $data= new Course;



       
        $data->name = $request->name;
       
       

      
        $data->save();
        $data->teachers()->attach($request->teacher_id);
        return redirect()->route('courses.index')->with('success','Class Created Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //return view('courses.edit', compact('course'));
    
        $data = Teacher::all();
        return view('courses.edit', ['data' => $data],compact('course'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'Please Enter the Course Name..',
        ]
        
        );   
        $course->name = $request->name;
        $course->update();
        $course->teachers()->sync($request->teacher_id);
        return redirect()->route('courses.index')->with('success','Class Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index')->with('success','Student Deleted Successfully');
    }
}
