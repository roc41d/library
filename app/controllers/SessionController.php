<?php

class SessionController extends BaseController {

	// function for displaying login form
	public function login() {	

		return View::make('site.login');
	}

	// function for handling userLogin
	public function handleLogin() {
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{
			return "admin home.";

		}

		else {
			return Redirect::back()->with('alertError', "invalid account details.");
		}

	}

	// function for displaying registration page
	public function register() {	
		return View::make('site.register');
	}

	// function for handling userRegistraton
	public function handleRegister() {
		$registerData = Input::all();
		$registerRules = array(
			'first_name'				=>'required',
			'last_name'					=>'required',
			//'email'						=>'required|email',
			'username'					=>'required|unique:users|min:4',
			'password'					=>'required|alpha_num|min:4',
			'comfirm_password'			=>'required|alpha_num|same:password'
			);
		$registerValidator = Validator::make($registerData,$registerRules);
		if( $registerValidator->passes()) {
			
			$newUser = New User();
			//$newUser->email = Input::get('email');
			$newUser->fname = Input::get('first_name');
			$newUser->lname = Input::get('last_name');
			$newUser->username = Input::get('username');
			$newUser->password = Hash::make(Input::get('password'));
			$newUser->save();
			
			return Redirect::to('login')->with('alertMessage',"account created.");
		}
		if($registerValidator->fails()) {
			return Redirect::back()->withInput()->withErrors($registerValidator);
		}
	}

	// function for handling Logout
	public function logout() {
		Auth::logout();
		return Redirect::to('/');
	}

}