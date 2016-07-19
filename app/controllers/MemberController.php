<?php

class MemberController extends BaseController {
    
    public function getLogout() {
        
        Session::forget('member_id');

        return Redirect::to('/');
    }

    public function postLogin() {
    	$attemptLoginData = Member::where('username', '=', Input::get('username'))->first();

        if ($attemptLoginData == null) {
            return Redirect::back()->with('alertError', 'User not found');
        }

        if ($attemptLoginData->status == 'old') {
            return Redirect::back()->with('alertError', 'Old student');
        }

        if ($attemptLoginData->username == Input::get('username')) {
            if (Hash::check(Input::get('password'), $attemptLoginData->password)) {

                Session::put('member_id', $attemptLoginData->id);

            } else {
                return Redirect::back()->with('alertError', 'Invalid email or password');
            }
        }

        return Redirect::to('member');
        
    }

    public function getIndex() {

		$data['user'] = Member::find(Session::get('member_id'));
		$data['books'] = Book::all();
        $data['borrowed'] = BookRequest::where('member_id','=',Session::get('member_id'))->where('type','=','borrow')->get();
        $data['reserved'] = BookRequest::where('member_id','=',Session::get('member_id'))->where('type','=','reserve')->get();

		return View::make('member.index')->with($data);

	}

    public function getBooks() {

        $data['user'] = Member::find(Session::get('member_id'));
        $data['books'] = Book::all();

        return View::make('member.books')->with($data);

    }

	public function getRequest($id) {

		$newBorrow = New BookRequest();
		$newBorrow->member_id = Session::get('member_id');
		$newBorrow->book_id = $id;
		$newBorrow->save();

		return Redirect::back();
	}

    public function getReserve($id) {

        $newReserve = New BookRequest();
        $newReserve->member_id = Session::get('member_id');
        $newReserve->book_id = $id;
        $newReserve->type = "reserve";

        $newReserve->save();

        return Redirect::back();
    }


}