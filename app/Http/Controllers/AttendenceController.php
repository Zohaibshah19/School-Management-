<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\Student;
use App\Clas;
use Carbon\Carbon;



use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function index(){

        
       // $class = Attendence::latest()->paginate(10);
       //$attendences=Attendence::with('students')->get();
    //    $attendences = Attendence::all(); 
    //    return view('attendences.index',compact('attendences'))->with('i',(request()->input('page',1) - 1 ) * 4);


    $attendences = Attendence::latest()->paginate(4);
   // $data = Clas::all();

   $data=Student::all();
    return view('attendences.index',compact('attendences'),['data'=>$data]);
    // $attendences = Attendence::latest()->paginate(4);
    // return view('attendences.index',compact('attendences'),['data'=>$data]);    

}

    
    public function create()
    {
       // return view('courses.create');
       $data = Student::all();
       return view('attendences.create', ['data' => $data]);
    }


    public function store(Request $request)
    {
          
        // $request->validate([
        //     'date'=>'required',
        // ],[
        //     'date.required'=>'Please Enter the date..',
        // ]
        
        
        //dd($request->all());
        // );
        $data= new Attendence;     
        //$data->date = $request->date;
        $data->isPresent = $request->isPresent;

       //$data->isPresent = $request->has('isPresent');
        
        //$data->isPresent = $request->get('isPresent');
        //$date = Carbon::now();

        $data->save();
        
        $data->students()->save($students);
        //$data->students()->attach($request->student_id);
        return redirect()->route('attendences.index')->with('success','Class Created Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function addClass()
    {
        $data = Clas::all();
        return view('attendences.index',['data'=>$data]);
    }

}
