@extends('layouts.layout')

{{-- web site title --}}
@section('title')
@parent
home
@stop

{{-- website content --}}
@section('content')

    <div class="row">
      <div class="col-lg-12">
          <div class="text-center">

            <img src="{{URL::to('assets')}}/images/image.jpg"> <br><br>

            <a class="btn btn-ls btn-primary" href="{{URL::to('admin-login')}}">Admin Login</a>
            <a class="btn btn-ls btn-success" href="{{URL::to('member-login')}}">Member Login</a>
            
          </div>
      </div>
    </div><!--/.row-->  

@stop
