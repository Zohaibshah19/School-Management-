











@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teachers</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <form action="{{route('teachers.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Teacher</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
         
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Teacher Name">
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div>


           

              </div>


              <div class="col-md-6">

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                @error('email')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>




</div>

<div class="col-md-6">

<div class="form-group">
    <label for="class">Class</label>
    <input type="text" class="form-control" name="class" id="class" placeholder="Enter Class">
    @error('class')
    <p style="color:red">{{$message}}</p>
    @enderror
</div>

</div>


<div class="col-md-6">
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
    @error('phone')
    <p style="color:red">{{$message}}</p>
    @enderror
</div>
</div>


<div class="col-md-6">
<div class="form-group">
    <label for="dob">DoB</label>
    <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter DoB">
    @error('dob')
    <p style="color:red">{{$message}}</p>
    @enderror
</div>
</div>

              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputFile">Teacher Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Teacher Image</label>
                  </div>
                 
                </div>
              </div>
              
              <!-- /.col -->
            </div>
        </div>
           
        </div>
            <!-- /.row -->

   

            <!-- /.row -->

            <div class="col-md-12">
<div class="form-group">
            <label>Select Course(s)</label>
                  <select multiple  class="form-control multi col-md-6" style="width: 100%;" name='course_id[]' >
                    @foreach($data as $item)
                    <option  id='course_id' value="{{$item->id}}">{{$item->name}}</option>
                    <span style="color:red">@error('course_id'){{$message}}@enderror</span>
                    @endforeach
                   
           
                  </select> 
</div>
</div>

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