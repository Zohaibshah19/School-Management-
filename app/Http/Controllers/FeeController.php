<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Student;
use Auth;

class FeeController extends Controller
{
    public function index(){
     $fees = Fee::all();
     $data=Student::all();
     return view('fees.index',compact('fees'),['data'=>$data]);
     
 }

    public function create(Request $request)
    {
        return view('fees.create',['student_id' => $request->student_id]);
    }


    public function store(Request $request, Fee $fees)
    {
       

        $request->validate([
            'amount'=>'required',
            'day'=>'required',
            'month'=>'required',
            'year'=>'required',

            //YYYY'month' => 'required|unique:fees,month,NULL,id,student_id,' . $this->index()->id,
           // 'month'=> 'required|string|unique:fees,id,'.$request->input('month'),

           // 'month' => 'required|unique:fees,book,student_id,'.Auth::fees()->id,
            
            //'month' => 'required|unique:wallets,month' . $id . ',id,fee_id,' . $this->students()->id,
            //'name' => 'unique:games,name,NULL,id,user_id,'.$user->id
        ]
        
        );

       // dd($request->all());
       
        $data= new Fee;
        $data->amount = $request->amount;
        $data->day = $request->day;

        $data->month = $request->month;
        
        $data->year= $request->year;
        
        $student = Student::find($request->student_id);
        $student->fees()->save($data);

        //$data->students()->save($data);
      // $data->student_id = auth()->fees()->id;
       // $data->save();

        return redirect()->route('fees.index')->with('success',' Created Successfully');
           }

           public function show(Request $request)
           {
               
            // $fees = Fee::where([
            //         //['day', '!=', Null],
            //         function ($query) use ($request){
            //             if(($term = $request->term)){
            //                 $query->orWhere('day','LIKE','%'.$term.'%')->get();
            //             }
            //         }
            //     ])
            //        ->orderBy('id','desc')
            //        ->paginate(10);
            //             $student = Student::Find($id);
            
            
            
               //return view('fees.create',['student_id' => $request->student_id]);
             
               $fees = Fee::all();
             // dd($fees->students->name);
               $data = Student::all();
               return view('fees.show',compact('fees'), ['data' => $data]);
               
            }

            public function search(){

                $search_text= $_GET['query'];
                $data = Student::where('name','LIKE','%'.$search_text.'%')->get();
                $search_text= $_GET['query'];
                $fe= Fee::where('month','LIKE','%'.$search_text.'%')->get();
                return view('fees.search',compact('fe'), ['data' => $data]);
            }

}