@extends('layouts.member')

{{-- web site title --}}
@section('title')
@parent
 books
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
      <li><a href="{{URL::to('member')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="active"><a href="{{URL::to('member/books')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Books</a></li>
    </ul>
  </div><!--/.sidebar-->

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"><a href="#">Books</a></li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"> Books</div>
          <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>No. of Copies</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $b)
                    <tr>
                        <td>{{$b->isbn}}</td>
                        <th>{{$b->bk_title}}</th>
                        <td>{{$b->bk_author}}</td>
                        <td>{{$b->numb_of_copy}}</td>
                        <td>
                          @if($b->numb_of_copy > 0)
                          <a href="{{URL::to('member/request/'. $b->id)}}" class="btn btn-sm btn-primary"> Borrow</a>
                          @else
                          <a href="{{URL::to('member/reserve/'. $b->id)}}" class="btn btn-sm btn-danger"> Reserve</a>
                          @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.main-->
  
@stop
