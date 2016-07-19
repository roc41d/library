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
      <li class="active"><a href="{{URL::to('admin')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="parent ">
        <a href="{{URL::to('admin/books')}}">
          <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg></span> Manage Books 
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="{{URL::to('admin/addbook')}}">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Book
            </a>
          </li>
        </ul>
      </li>
      <li class="parent ">
        <a href="{{URL::to('admin/students')}}">
          <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg></span> Manage Students 
        </a>
        <ul class="children collapse" id="sub-item-2">
          <li>
            <a class="" href="{{URL::to('admin/addstudent')}}">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Student
            </a>
          </li>
        </ul>
      </li>
      <li class="parent ">
        <a class="" href="{{URL::to('admin/employees')}}">
          <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></span> Manage Employees
        </a>
        <ul class="children collapse" id="sub-item-3">
          <li>
            <a class="" href="{{URL::to('admin/addemployee')}}">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Employee
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
              <div class="large">{{$students}}</div>
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
              <div class="large">{{$employees}}</div>
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
              <div class="large">{{$books}}</div>
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
              <div class="large">{{$request}}</div>
              <div class="text-muted">Book Requests</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Books Request</div>
          <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Member Name</th>
                        <th>Book Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $r)
                    <tr>
                        <td>{{Member::find($r->member_id)->fname}} {{Member::find($r->member_id)->lname}}</td>
                        <th>{{Book::find($r->book_id)->bk_title}}</th>
                        <td>
                          @if($r->type == "borrow")
                          <a href="{{URL::to('admin/bookaccept/'. $r->id)}}" class="btn btn-sm btn-primary"> Accept</a>
                          <a href="{{URL::to('admin/bookreject/'. $r->id)}}" class="btn btn-sm btn-danger"> Reject</a>
                          @else
                          <a href="{{URL::to('admin/reserveaccept/'. $r->id)}}" class="btn btn-sm btn-primary"> Accept</a>
                          <a href="{{URL::to('admin/reservereject/'. $r->id)}}" class="btn btn-sm btn-danger">Reject</a>
                          @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
    
  </div>  <!--/.main-->

@stop
