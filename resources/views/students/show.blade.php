@extends('layouts.admin')
@section('content')
<h1> Teachers Details </h1>

@if($student)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">

    <div class="card" style="width: 20rem;" background-color="grey">
  
  <div class="card-body" background-color="grey">
    
    <img style="width:80px"  src="{{ asset('uploads/'.$student->image ) }}" class="card-img-top"/><br>
    <h5 class="card-title"><b>Name: {{$student->name}}</b></h5></br>
    <h5 class="card-title">Father Name: {{$student->father_name}}</h5></br>
    <h5 class="card-title">Email: {{$student->email}}</h5></br>
    <h5 class="card-title">Class: {{$student->class}}</h5></br>
    <h5 class="card-title">Phone: {{$student->phone}}</h5></br>
    <h5 class="card-title">DoB: {{$student->dob}}</h5> </br>    
  </div>



</div>
    </div>
    <div class="col-4"></div>

</div>
@endif
@endsection