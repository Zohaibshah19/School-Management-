











@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Attendences</h1>
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
        <form action="{{route('attendences.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Attendence</h3>

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
                <label for="email">Date</label>
                <input type="text" class="form-control" name="date" id="email" placeholder="Enter Date">
                @error('date')
                <p style="color:red">{{$message}}</p>
                @enderror
            </div>
</div>

<div class="col-md-6">

              <!-- /.col -->
              
              
              <!-- /.col -->
            </div>
        </div>
           
        </div>
            <!-- /.row -->
           <!-- /.row -->

            <div class="col-md-12">
<div class="form-group">
            <label>Select Student</label>
                  <select multiple  class="form-control multi col-md-6" style="width: 100%;" name='student_id[]' >
                    @foreach($data as $item)
                    <option  id='student_id' value="{{$item->id}}">{{$item->name}}</option>
                    <span style="color:red">@error('student_id'){{$message}}@enderror</span>
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