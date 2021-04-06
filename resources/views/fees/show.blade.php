









@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students Payment History</h1>
       
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
                <div class="input-group">
  
  
                

</div>






<div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ url('/search') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" >
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="query" placeholder="Search" id="query">
                       
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                   
                    </div>
                </form>
            </div>
        </div>





              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Student Name</th>
                    <th>Payment Day</th>
                    <th>Payment Month</th>
                    <th>Payment Year</th>
                    <th>Payment Amount</th>


                  </tr>
                  </thead>
           
                  <tbody>
                    @foreach($fees as $fee)
                  <tr>
                  <td class="align-middle">{{$fee->students->name}}</td>

                    <td class="align-middle">{{$fee->day}}</td>
                    <td class="align-middle">{{$fee->month}}</td>
                    <td class="align-middle">{{$fee->year}}</td>
                    <td class="align-middle">{{$fee->amount}}</td>
                   

 
 

      </td>
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