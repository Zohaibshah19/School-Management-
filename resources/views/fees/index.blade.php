









@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fees</h1>
       
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
                <h3 class="card-title">Fees</h3>
                <a href="{{url('fees/show')}}" style  ="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-success">View Fees Details</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th>Class</th>

                    <th>Pay Fees</th>


                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $fee)
                  <tr>



                  <td id='student_id' value="{{$fee->id}}">{{$fee->name}}</td>
                  <td id='student_id' value="{{$fee->id}}">{{$fee->father_name}}</td>

                  <td id='student_id' value="{{$fee->id}}">{{$fee->class}}</td>
                  
                  
                  
                  <td>
        <a href="{{route('fees.create',['student_id'=>$fee->id])}}" class="btn btn-primary">Pay Fees</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        


 
                  </tr>
                @endforeach
                  </tbody>
                
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