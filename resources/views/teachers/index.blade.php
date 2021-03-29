









@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teachers</h1>
       
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <section class="content">

                @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Teachers</h3>
                <a href="{{route('teachers.create')}}" style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-success">Add Teachers</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>DoB</th>
                    <th>Course(s)</th>

                    <th>View / Edit / Delete</th>


                  </tr>
                  </thead>

                  <tbody>
                  
                    @foreach($teachers as $teacher)
                    
                  <tr>
    <td class="align-middle"><img src="{{ asset('uploads/'.$teacher->image ) }}" class="img-thumbnail" style="width:80px"></td>

                    <td class="align-middle">{{$teacher->name}}</td>
                    <td class="align-middle">{{$teacher->email}} </td>
                    

                    <td class="align-middle">{{ !empty($teacher->classTeacher) ? $teacher->classTeacher->name:'' }} {{ !empty($teacher->classTeacher) ? $teacher->classTeacher->section:'' }}</td> 
                   
                    
                   
                    <td class="align-middle">{{$teacher->phone}} </td>
                    <td class="align-middle">{{$teacher->dob}} </td>
      
                   <td class="align-middle">{{ collect($teacher->latestStatus)->implode('name', ",") }}</td>


                    <td class='align-middle'>
      <form action="{{route('teachers.destroy',$teacher->id)}}" method="POST">
        <a href="{{route('teachers.show',$teacher->id)}}" class="fa fa-eye"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="{{route('teachers.edit',$teacher->id )}}" class="fa fa-edit  "></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        
        @csrf
        @method('DELETE')
        <button type="submit" class="fa fa-trash" onclick="return confirm('Are You Sure to DELETE the selected data')"></button>
        
        

        </form>
 
 

      </td>
                  </tr>
                @endforeach
                  </tbody>
                
                </table>


<br>                  <div class='d-flex'>
<div class='mx-auto'>
{{ $teachers->links('pagination::bootstrap-4') }}
</div>
</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection