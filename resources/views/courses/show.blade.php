@extends('layouts.admin')
@section('content')
<h1> Course Details </h1>

@if($course)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">

    <div class="card" style="width: 20rem;" background-color="grey">
  
  <div class="card-body" background-color="grey">
    
    
    <h5 class="card-title"><b>Name: {{$course->name}}</b></h5></br>
    <h5 class="card-title"><b>Teacher(s): {{ collect($course->latestStatus)->implode('name', ",") }}</b></h5></br>

 </div>



</div>
    </div>
    <div class="col-4"></div>

</div>
@endif
@endsection