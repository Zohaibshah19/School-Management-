
@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Courses</h1>
          </div>

    </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Courses</h3>

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
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Course Name">
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                  </div>


                
              </div>
              </div>
              <!-- /.col -->
             
              <!-- /.col -->
            </div>
            <!-- /.row -->



            <div class="col-md-12">
<div class="form-group">
            <label>Select Teacher(s) </label>   (Note: Keep Ctrl key pressed when selecting multiple teachers)  
                  <select multiple  class="form-control multi col-md-6" style="width: 100%;" name='teacher_id[]' >
                    @foreach($data as $item)
                    <option  id='teacher_id' value="{{$item->id}}">{{$item->name}}</option>
                    <span style="color:red">@error('teacher_id'){{$message}}@enderror</span>
                    @endforeach
                   
           
            </select> 
</div>
</div>
   

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
