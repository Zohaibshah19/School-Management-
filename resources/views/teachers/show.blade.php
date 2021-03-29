@extends('layouts.admin')
@section('content')
<h1> Teachers Details </h1>

@if($teacher)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">

    <div class="card" style="width: 20rem;" background-color="grey">
  
  <div class="card-body" background-color="grey">
    
    <img style="width:80px"  src="{{ asset('uploads/'.$teacher->image ) }}" class="card-img-top"/><br>
    <h5 class="card-title"><b>Name: {{$teacher->name}}</b></h5></br>
    <h5 class="card-title">Email: {{$teacher->email}}</h5></br>
    <h5 class="card-title">Class: {{$teacher->class}}</h5></br>
    <h5 class="card-title">Phone: {{$teacher->phone}}</h5></br>
    <h5 class="card-title">DoB: {{$teacher->dob}}</h5> </br> 
    <h5 class="card-title"><b>Course(s): {{ collect($teacher->latestStatus)->implode('name', ",") }}</b></h5></br>

  </div>



</div>
    </div>
    <div class="col-4"></div>

</div>
@endif
@endsection