@extends('layouts.admin')
@section('content')
<h1> Class Details </h1>

@if($class)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">

    <div class="card" style="width: 20rem;" background-color="grey">
  
  <div class="card-body" background-color="grey">
    
    <h5 class="card-title"><b>Name: {{$class->name}}</b></h5></br>
    <h5 class="card-title">Section: {{$class->section}}</h5></br>
    <h5 class="card-title">Class Teacher ID: {{$class->teacher_id}}</h5></br>
  </div>



</div>
    </div>
    <div class="col-4"></div>

</div>
@endif
@endsection