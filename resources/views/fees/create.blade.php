











@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pay Fees</h1>
          </div>
          
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <!-- SELECT2 EXAMPLE -->

        <form action="{{ route('fees.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

           

            <input name="student_id" type="hidden" value={{$student_id}} />
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Fees</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
         
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                    <label for="name">Amount</label>
                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount">
                    @error('amount')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="father_name">Day</label>
                    <input type="text" class="form-control" name="day" id="day" placeholder="Day">
                    @error('day')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="email"> Month</label>
                  <input type="text" class="form-control" name="month" id="month" placeholder="Month">
                  @error('month')
                  <p style="color:red">{{$message}}</p>
                  @enderror
                </div>

              

                <div class="form-group">
                  <label for="class"> Year</label>
                  <input type="text" class="form-control" name="year" id="year" placeholder="Year">
                  @error('year')
                  <p style="color:red">{{$message}}</p>
                  @enderror
                </div>

              
              </div>
              <!-- /.col -->
             
              <!-- /.col -->
            </div>
            <!-- /.row -->

   

            <!-- /.row -->
          </div>
         
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        
          </div>
    </div>
</form>


        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection
