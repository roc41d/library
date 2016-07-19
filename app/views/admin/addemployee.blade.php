@extends('layouts.admin')

{{-- web site title --}}
@section('title')
@parent
add employee
@stop

{{-- website content --}}
@section('content')

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="parent ">
        <a href="#">
          <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg></span> Manage Books 
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="addbook.html">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Book
            </a>
          </li>
          <li>
            <a class="" href="updatebook.html">
              <svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"/></svg> Update Book
            </a>
          </li>
        </ul>
      </li>
      <li class="parent ">
        <a href="#">
          <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg></span> Manage Students 
        </a>
        <ul class="children collapse" id="sub-item-2">
          <li>
            <a class="" href="addstudent.html">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Student
            </a>
          </li>
          <li>
            <a class="" href="updatestudent.html">
              <svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"/></svg> Update Student
            </a>
          </li>
        </ul>
      </li>
      <li class="parent ">
        <a class="active" href="#">
          <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></span> Manage Employees
        </a>
        <ul class="children collapse" id="sub-item-3">
          <li>
            <a class="" href="addemployee.html">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Employee
            </a>
          </li>
          <li>
            <a class="" href="#">
              <svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"/></svg> Update Employee
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div><!--/.sidebar-->
  
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"><a href="#">Manage Employee</a></li><li class="active">Add Employee</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Manage Employees</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"> Add Employee</div>
          <div class="panel-body">
            <form class="form-horizontal" action="" method="post">
              <fieldset>
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">First Name</label>
                  <div class="col-md-9">
                  <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="lname">Last Name</label>
                  <div class="col-md-9">
                  <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="">Phone Number</label>
                  <div class="col-md-9">
                  <input id="number" name="number" type="text" placeholder="Phone Number" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="">Address</label>
                  <div class="col-md-9">
                  <input id="address" name="address" type="text" placeholder="Address" class="form-control">
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    Login Info
                  </div>
                  <div class="panel-body">
                    
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="">Username</label>
                      <div class="col-md-9">
                      <input id="username" name="username" type="text" placeholder="Username" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="">Password</label>
                      <div class="col-md-9">
                      <input id="password" name="password" type="text" placeholder="Employee's Password" class="form-control">
                      </div>
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="name"></label>
                  <div class="col-md-9">
                  <button type="submit" class="btn btn-primary btn-md">Add</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.main-->

@stop
