@extends('layouts.layout')

{{-- web site title --}}
@section('title')
@parent
register
@stop

{{-- website content --}}
@section('content')

    <h3 class="text-center">REGISTRATION</h3>
      <!--Form user input collection-->
      <fieldset class="small-6 small-centered columns">
      <!--Form to send the information to the database-->
        {{Form::open(array('url'=>'register'))}}
          <!--<label>Email:
            <input type="text" name="email" placeholder="example@email.com" />
            <span class="badge alert-danger">{{ ($errors->has('email') ? $errors->first('email') : '') }}</span>
          </label>-->

          <label>First Name:
            <input type="text" name="first_name" placeholder="First Name" />
            <span class="badge alert-danger">{{ ($errors->has('first_name') ? $errors->first('first_name') : '') }}</span>
          </label>

          <label>Last Name:
            <input type="text" name="last_name" placeholder="Last Name" />
            <span class="badge alert-danger">{{ ($errors->has('last_name') ? $errors->first('last_name') : '') }}</span>
          </label>

          <label>Userame:
            <input type="text" name="username" placeholder="Username" />
            <span class="badge alert-danger">{{ ($errors->has('username') ? $errors->first('username') : '') }}</span>
          </label>

           <label>Password:
            <input type="password" name="password" placeholder="*********" />
            <span class="badge alert-danger">{{ ($errors->has('password') ? $errors->first('password') : '') }}</span>
          </label>

           <label>Confirm Password:
            <input type="password" name="comfirm_password" placeholder="*********" />
            <span class="badge alert-danger">{{ ($errors->has('comfirm_password') ? $errors->first('comfirm_password') : '') }}</span>
          </label>

           <label>
            <input class="button tiny send_btn" type="submit" name="push_info" value="Submit"/>
          </label>
        {{Form::close()}}
      </fieldset>

@stop
