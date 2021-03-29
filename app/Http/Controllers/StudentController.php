<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(4);


        return view('students.index',compact('students'))->with('i',(request()->input('page',1) - 1 ) * 4);
    }

    public function attendence()
    {
        $students = Student::latest()->paginate(4);
        return view('students.attendence',compact('students'))->with('i',(request()->input('page',1) - 1 ) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'father_name'=>'required',
            'email'=>'required|email|unique:students,email',
            'class'=>'required',
            'phone'=>'required | min:11 |numeric',
            'dob'=>'required | date',
            'image'=>'required | image | mimes:jpeg,png,jpg,gif|max:2048'

        ],[
            'name.required'=>'Please Enter the Name..',
            'father_name.required'=>'Please Enter the Father Name..',
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


        $data= new Student;
        $data->name = $request->name;
        $data->father_name = $request->father_name;

        $data->email = $request->email;
        
        $data->class= $request->class;
        
        $data->phone = $request->phone;
        $data->dob = $request->dob;
        $data->image = $imageName;


        $data->save();
        return redirect()->route('students.index')->with('success',' Created Successfully');
        





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        
        $emailRule = Rule::unique((new Student)->getTable());

        $request->validate([
            'name'=>'required',
            'father_name'=>'required',
            'email'=>'required','email','$emailRule',
            'class'=>'required',
            'phone'=>'required | min:11 |numeric',
            'dob'=>'required | date',
            //'image'=>'required | image | mimes:jpeg,png,jpg,gif|max:2048'

        ]
        ,[
            'name.required'=>'Please Enter the Name..',
            'father_name.required'=>'Please Enter the Father Name..',
            'email.required'=>'Please Enter Email Address',
            'phone.required'=>'Please Your Phone Number',
            'dob.required'=>'Please Enter date of birth',
            'class.required'=>'Please enter Class',
            //'image.required'=>'Please select image',

           
        ]
        
        );

        $imageName = '';

        if($request->image){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'),$imageName);
        }


        
        $student->name = $request->name;
        $student->father_name = $request->father_name;

        $student->email = $request->email;
        
        $student->class= $request->class;
        
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->image = $imageName;


        $student->update();
        return redirect()->route('students.index')->with('success','Teacher Created Successfully');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success','Student Deleted Successfully');
    }
}
