
@extends('layouts.admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <form action="{{route('attendences.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Attendence</h1>

            <div class="col-sm-12">
          <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <label>Select Class</label>
                  <select class="form-control select2" style="width: 100%;" name='student_id'>
                    @foreach($data as $item)
                    <option  id='student_id' value="{{$item->id}}">{{$item->class}}</option>
                    <span style="color:red">@error('student_id'){{$message}}@enderror</span>
                    @endforeach
                  </select> 

   
                  
                  
        </div>
        <a href="" style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-success">Show Details</a>
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

            <div class="">
              <div class="card-header">
                <a onclick='selects()' style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-primary">Select All</a> 
               
           
              <div class="">
                <a onclick='deSelect()' style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-primary">De-select All</a>
               
              </div>
              </div>










    


<html>  
<head>  
        <script type="text/javascript">  
            function selects(){  
                var ele=document.getElementsByName('isPresent');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('isPresent');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             
        </script>  
    </head>  
 
</html>












              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                  
                    
                    <th>Student Name</th>
                   <th>Student Class</th>
                   <th>Mark Attendance</th>
                    


                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $attendence)
                  <tr>



                  <td id='student_id' value="{{$attendence->id}}">{{$attendence->name}}</td>
                  <td id='student_id' value="{{$attendence->id}}">{{$attendence->class}}</td>
                  
                  
                  
                  <td>
                  <div class="form-group">
      <input type="checkbox" name="isPresent" value="checked" id="isPresent"/> 
    </td>
 
                  </tr>
                @endforeach
                  </tbody>
                
                
                </table>


<br>                  <div class='d-flex'>
<div class='mx-auto'>
</div>
</div>

   <!-- /.card-body -->
   <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        
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
      
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection