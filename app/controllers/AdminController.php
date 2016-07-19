<?php

class AdminController extends BaseController {

	public function getIndex() {

		$data['user'] = Auth::user();
		$data['students'] = Member::where('type', '=', 'student')->count();
		$data['employees'] = Member::where('type', '=', 'employee')->count();
		$data['request'] = BookRequest::where('status','=','pending')->count();
		$data['books'] = Book::all()->count();
		$data['requests'] = BookRequest::where('status','=','pending')->get();


		return View::make('admin.index')->with($data);

	}

	public function getBooks() {

		$data['user'] = Auth::user();
		$data['books'] = Book::all();

		return View::make('admin.books')->with($data);
	}

	public function getAddbook() {

		$data['user'] = Auth::user();

		return View::make('admin.addbook')->with($data);
	}

	public function postAddbook() {
		$bookData = Input::all();
		$bookRules = array(
			'title'				=>'required',
			'isbn'				=>'required',
			'author'			=>'required',
			'copies'			=>'required|numeric',
			);
		$bookValidator = Validator::make($bookData,$bookRules);
		if( $bookValidator->passes()) {
			
			$newBook = New Book();
			$newBook->bk_title = Input::get('title');
			$newBook->isbn = Input::get('isbn');
			$newBook->bk_author = Input::get('author');
			$newBook->numb_of_copy = Input::get('copies');
			$newBook->save();
			
			return Redirect::to('admin/books')->with('alertMessage',"Book added.");
		}
		if($bookValidator->fails()) {
			return Redirect::back()->withInput()->withErrors($bookValidator);
		}
	}

	public function getUpdatebook($id) {

		$data['user'] = Auth::user();
		$data['book'] = Book::find($id);

		return View::make('admin.updatebook')->with($data);

	}

	public function postUpdatebook() {
			
			$newBook = Book::find(Input::get('bID'));
			$newBook->bk_title = Input::get('title');
			$newBook->isbn = Input::get('isbn');
			$newBook->bk_author = Input::get('author');
			$newBook->numb_of_copy = Input::get('copies');
			$newBook->save();
			
			return Redirect::to('admin/books')->with('alertMessage',"Book added.");
	}

	public function getStudents() {

		$data['user'] = Auth::user();
		$data['students'] = Member::where('type', '=', 'student')->where('status','=','current')->get();
		$data['dept'] = Department::all();
		$data['degree'] = Degree::all();

		return View::make('admin.students')->with($data);
	}

	public function getAddstudent() {

		$data['user'] = Auth::user();
		$data['dept'] = Department::all();
		$data['degree'] = Degree::all();

		return View::make('admin.addstudent')->with($data);
	}

	public function postAddstudent() {
		$studentData = Input::all();
		$studentRules = array(
			'fname'				=>'required',
			'lname'				=>'required',
			'matricule'			=>'required',
			'address'			=>'required',
			'dept'				=>'required',
			'degree'			=>'required',
			'username'			=>'required|unique:members',
			'password'			=>'required',
			);
		$studentValidator = Validator::make($studentData,$studentRules);
		if( $studentValidator->passes()) {

			$newStudent = New Member();
			$newStudent->fname = Input::get('fname');
			$newStudent->lname = Input::get('lname');
			$newStudent->matricule = Input::get('matricule');
			$newStudent->address = Input::get('address');
			$newStudent->department_id = Input::get('dept');
			$newStudent->dtype_id = Input::get('degree');
			$newStudent->username = Input::get('username');
			$newStudent->password = Hash::make(Input::get('password'));
			$newStudent->status = "current";
			$newStudent->type = "student";
			$newStudent->save();
			
			return Redirect::to('admin/students')->with('alertMessage',"Student added.");
		}
		if($studentValidator->fails()) {
			return Redirect::back()->withInput()->withErrors($studentValidator);
		}

	}

	public function getEmployees() {

		$data['user'] = Auth::user();
		$data['employees'] = Member::where('type', '=', 'employee')->where('status','=','current')->get();

		return View::make('admin.employees')->with($data);
	}

	public function getAddemployee() {

		$data['user'] = Auth::user();

		return View::make('admin.addemployee')->with($data);
	}

	public function postAddemployee() {
		$studentData = Input::all();
		$studentRules = array(
			'fname'				=>'required',
			'lname'				=>'required',
			'address'			=>'required',
			'number'			=>'required|numeric',
			'username'			=>'required|unique:members',
			'password'			=>'required',
			);
		$studentValidator = Validator::make($studentData,$studentRules);
		if( $studentValidator->passes()) {

			$newStudent = New Member();
			$newStudent->fname = Input::get('fname');
			$newStudent->lname = Input::get('lname');
			$newStudent->tel_number = Input::get('number');
			$newStudent->address = Input::get('address');
			$newStudent->username = Input::get('username');
			$newStudent->password = Hash::make(Input::get('password'));
			$newStudent->status = "current";
			$newStudent->type = "employee";
			$newStudent->save();
			
			return Redirect::to('admin/employees')->with('alertMessage',"Student added.");
		}
		if($studentValidator->fails()) {
			return Redirect::back()->withInput()->withErrors($studentValidator);
		}

	}

	public function getBookaccept($id) {

		$rbook = BookRequest::find($id);
		$book = Book::find($rbook->book_id);

		$rbook->status = "accepted";
		$tempDate = date('m-d-Y');

        $bdate = date_format(new DateTime(str_replace('-', '/', $tempDate)), 'Y-m-d');

        $rbook->date_borrow = $bdate;
        $rbook->date_return = $bdate;

		$rbook->save();

		$copies = $book->numb_of_copy;
		$book->numb_of_copy = $copies - 1;
		$book->save();

		return Redirect::back();

	}

	public function getBookreject($id) {

		$rbook = BookRequest::find($id);

		$rbook->status = "decline";
		$rbook->save();

		return Redirect::back();

	}

	public function getReserveaccept($id) {

		$rbook = BookRequest::find($id);

		$rbook->status = "accepted";
		$tempDate = date('m-d-Y');

        $bdate = date_format(new DateTime(str_replace('-', '/', $tempDate)), 'Y-m-d');

        $rbook->date_reserved = $bdate;

		$rbook->save();

		return Redirect::back();

	}

	public function getReservereject($id) {

		$rbook = BookRequest::find($id);

		$rbook->status = "decline";
		$rbook->save();

		return Redirect::back();

	}
    
}
