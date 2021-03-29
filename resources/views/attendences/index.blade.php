@extends('layouts.admin')
@section('content')

<!-- checkbox name class CRUD -->















  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
       
          </div>
          <div class="col-sm-6">
          <div class="row">
              <div class="col-md-6">
                <div class="form-group" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                  <label>search by class</label>
                  <select class="form-control select2" style="width: 50%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                   
                  </select>
                </div>
                </div>
                </div>

          
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
                <h3 class="card-title">Students</h3>
               
                <a href="{{route('students.create')}}" style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-success">Select All</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Attendence</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>View / Edit / Delete</th>


                  </tr>
                  </thead>
                     
                  <tbody>
                  
              

                    <td class='align-middle'>

 
 

      </td>
                  </tr>
               
                
                </table>


<br>                  <div class='d-flex'>
<div class='mx-auto'>
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