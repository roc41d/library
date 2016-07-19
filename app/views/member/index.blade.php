@extends('layouts.member')

{{-- web site title --}}
@section('title')
@parent
 member home
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
      <li class="active"><a href="{{URL::to('member')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li><a href="{{URL::to('member/books')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Books</a></li>
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
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Borrowed Logs</div>
          <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Retuen date</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($borrowed as $r)
                    <tr>
                        <th>{{Book::find($r->book_id)->bk_title}}</th>
                        <td>{{$r->status}}</td>
                        @if($r->status == "accepted")
                          <td>{{ date("F jS, Y",strtotime($r->date_return))}}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        
      </div><!--/.col-->

      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading"> Reserved Logs</div>
          <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Reserved date</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($reserved as $r)
                    <tr>
                        <th>{{Book::find($r->book_id)->bk_title}}</th>
                        <td>{{$r->status}}</td>
                        @if($r->status == "accepted")
                          <td>{{ date("F jS, Y",strtotime($r->date_reserved))}}</td>
                        @endif
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
