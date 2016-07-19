@extends('layouts.admin')

{{-- web site title --}}
@section('title')
@parent
add student
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
      <li><a href="{{URL::to('admin')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
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
        <a class="active" href="{{URL::to('admin/students')}}">
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
        <li class="active"><a href="#">Manage Student</a></li><li class="active">Add Student</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Manage Students</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"> Add Student</div>
          <div class="panel-body">
            {{Form::open(array('url'=>'admin/addstudent', 'class'=>'form-horizontal'))}}
              <fieldset>
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">First Name</label>
                  <div class="col-md-9">
                  <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                  <span class="badge alert-danger">{{ ($errors->has('fname') ? $errors->first('fname') : '') }}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="lname">Last Name</label>
                  <div class="col-md-9">
                  <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                  <span class="badge alert-danger">{{ ($errors->has('lname') ? $errors->first('lname') : '') }}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="">Matricule</label>
                  <div class="col-md-9">
                  <input id="matricule" name="matricule" type="text" placeholder="Matricule" class="form-control">
                  <span class="badge alert-danger">{{ ($errors->has('matricule') ? $errors->first('matricule') : '') }}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="">Address</label>
                  <div class="col-md-9">
                  <input id="address" name="address" type="text" placeholder="Address" class="form-control">
                  <span class="badge alert-danger">{{ ($errors->has('address') ? $errors->first('address') : '') }}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="">Department</label>
                  <div class="col-md-9">
                  <select class="form-control" name="dept">
                      <option>-- Department --</option>
                      @foreach($dept as $d)
                        <option name="dept" value="{{$d->id}}"> {{$d->name}} </option>
                      @endforeach
                      <span class="badge alert-danger">{{ ($errors->has('dept') ? $errors->first('dept') : '') }}</span>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="">Degree Type</label>
                  <div class="col-md-9">

                  <select class="form-control" name="degree">
                      <option>-- Choose Degree Type --</option>
                      @foreach($degree as $d)
                        <option name="degree" value="{{$d->id}}"> {{$d->name}} </option>
                      @endforeach
                      <span class="badge alert-danger">{{ ($errors->has('degree') ? $errors->first('degree') : '') }}</span>
                    </select>
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
                      <span class="badge alert-danger">{{ ($errors->has('username') ? $errors->first('username') : '') }}</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="">Password</label>
                      <div class="col-md-9">
                      <input id="password" name="password" type="text" placeholder="Student Password" class="form-control">
                      <span class="badge alert-danger">{{ ($errors->has('password') ? $errors->first('password') : '') }}</span>
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
            {{Form::close()}}
          </div>
        </div>
        
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.main-->

@stop
