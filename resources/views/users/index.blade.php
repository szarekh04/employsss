@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->   

   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size:20px; color:black;" class="m-0">Employee Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="color:">
            Employee Management 
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

    <!-- /.content-header -->



    <div class="card card-primary"  style="margin-left:250px; margin-right:250px;">
              <div  style="color:black;" class="card-header " >
                <h3  class="card-title">Add new employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; ">
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" class="form-control" placeholder= "e.g Juan" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="password" class="form-control" placeholder= "e.g Dela Cruz" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" placeholder= "e.g Dela" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" placeholder= "" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">

                  <label for="exampleInputPassword1">Country</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="Please select your Country">
                    <option>Please select your Country</option>
                    <option>Philippines</option>
                    <option>Others</option>
                  </select>

                  </div>

                  <div class="form-group">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" >
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthdate</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Date Hired</label>
                    <input type="Date" class="form-control" id="exampleInputPassword1" >
                  </div>



                  
                  <div class="form-group">

                  <label for="exampleInputPassword1">Department</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="General Management">
                    <option>General Management</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

              </div>

              <div class="form-group">

                  <label for="exampleInputPassword1">Division</label>


                  <select class="custom-select form-control-border" id="exampleSelectBorder"   placeholder="General Management">
                    <option>First Division</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>

              </div>
                
@endsection