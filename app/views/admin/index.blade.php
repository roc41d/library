@extends('layouts.admin')

{{-- web site title --}}
@section('title')
@parent
home
@stop

{{-- website content --}}
@section('content')

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
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
        <a href="#">
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
      </ol>
    </div><!--/.row--><br >
    
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">xx</div>
              <div class="text-muted">Students</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">xx</div>
              <div class="text-muted">Employees</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">xx</div>
              <div class="text-muted">Books</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">xx</div>
              <div class="text-muted">Book Requests</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Site Traffic Overview</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->    
  </div>  <!--/.main-->

@stop
