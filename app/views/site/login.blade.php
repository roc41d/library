@extends('layouts.layout')

{{-- web site title --}}
@section('title')
@parent
login
@stop

{{-- website content --}}
@section('content')

    <h2 class="text-center">LOGIN</h2>
      <!--Form user input collection-->
      <fieldset class="small-6 small-centered columns">
      @if(Session::has('alertMessage'))
              <div class="alert alert-dismissable alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{Session::get('alertMessage')}}</strong>
              </div>
              @endif

              @if(Session::has('alertError'))
              <div class="alert alert-dismissable alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{Session::get('alertError')}}</strong>
              </div>
              @endif
      <!--Form to send the information to the database-->
        {{Form::open(array('url'=>'login'))}}
          <label>Userame:
            <input type="text" name="username"/>
          </label>
           <label>Password:
            <input type="password" name="password"/>
          </label>
           <label>
            <input class="button tiny send_btn" type="submit" name="push_info" value="Submit"/>
          </label>
          
        {{Form::close()}}
      </fieldset>

@stop
