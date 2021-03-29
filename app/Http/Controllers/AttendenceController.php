<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\Student;

use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function index(){

        
        $class = Attendence::latest()->paginate(10);
        return view('attendences.index',compact('class'))->with('i',(request()->input('page',1) - 1 ) * 4);
    }


}
