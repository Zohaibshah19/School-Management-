











@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Student</h1>
          </div>
          
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <form action="{{ route('students.update',$student->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Update Student</h3>

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
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="father_name">Father Name</label>
                    <input type="text" class="form-control" name="father_name" id="father_name" value="{{$student->father_name}}">
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="email"> Email</label>
                  <input type="text" class="form-control" name="email" id="email" value="{{$student->email}}">
                  @error('email')
                  <p style="color:red">{{$message}}</p>
                  @enderror
                </div>

              

                <div class="form-group">
                  <label for="class"> Class</label>
                  <input type="text" class="form-control" name="class" id="class"value="{{$student->class}}">
                  @error('class')
                  <p style="color:red">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="phone"> Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone"value="{{$student->phone}}">
                  @error('phone')
                  <p style="color:red">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="dob"> DoB</label>
                  <input type="text" class="form-control" name="dob" id="dob" value="{{$student->dob}}">
                  @error('dob')
                  <p style="color:red">{{$message}}</p>
                  @enderror
                </div>


                <div class="form-group">
                <label for="exampleInputFile">Teacher Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Student Image</label>
                  </div>
                 
                </div>
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
