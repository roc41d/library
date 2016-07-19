@extends('layouts.admin')

{{-- web site title --}}
@section('title')
@parent
update book
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
      <li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="parent ">
        <a class="active" href="#">
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
        <li class="active"><a href="#">Manage Books</a></li><li class="active">Update Book</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Manage Books</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"> Update Book</div>
          <div class="panel-body">
            <form class="form-horizontal" action="" method="post">
              <fieldset>
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="isbn">Title</label>
                  <div class="col-md-9">
                  <input id="title" name="title" type="text" placeholder="Book Title" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="isbn">ISBN</label>
                  <div class="col-md-9">
                  <input id="isbn" name="isbn" type="text" placeholder="Book ISBN" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="book_author">Author</label>
                  <div class="col-md-9">
                  <input id="author" name="author" type="text" placeholder="Book Author" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="book_copies">No of Copies</label>
                  <div class="col-md-9">
                  <input id="copies" name="copies" type="test" placeholder="Number of copies" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="name"></label>
                  <div class="col-md-9">
                  <button type="submit" class="btn btn-primary btn-md">Update</button>
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
