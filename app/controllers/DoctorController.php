<?php

class DoctorController extends BaseController {

	public function __construct() {
        
        $this->doctor = Doctor::where('user_code', '=', Auth::user()->code)->first();
    }

	public function getIndex() {

			$data['doctor'] = $this->doctor;
			$data['patients'] = Patient::all();
			$data['appointments'] = Appointment::all();

			return View::make('doctor.doctor')->with($data);

	}

	public function postComplete() {
		$profileData = Input::all();
		$profileRules = array(
			'name'					=>'required',
			'date'	   				=>'required',
			'gender'					=>'required',
			'email'					=>'required|email',
			'contact'					=>'required',
			'address'					=>'required',
			'city'					=>'required',
			'specialization'					=>'required',
			'qualification'					=>'required',
			'working_hours'					=>'required',
			);
		$profileValidator = Validator::make($profileData,$profileRules);
		if( $profileValidator->passes()) {

			$updateDoctor = $this->doctor;
			$updateDoctor->name = Input::get('name');
			$updateDoctor->dob = Input::get('date');
			$updateDoctor->gender = Input::get('gender');
			$updateDoctor->email_p = Input::get('email');
			$updateDoctor->contact_p = Input::get('contact');
			$updateDoctor->address = Input::get('address');
			$updateDoctor->city = Input::get('city');
			$updateDoctor->status = "completed";
			$updateDoctor->specialization = Input::get('specialization');
			$updateDoctor->qualification = Input::get('qualification');
			$updateDoctor->work_hour = Input::get('working_hours');

			$updateDoctor->save();

			return Redirect::to('doctor')->with('alertMessage',"profile completed");;


		}
		if($profileValidator->fails()) {
			return Redirect::back()->withInput()->withErrors($profileValidator);
		}

	}

	public function getComplaints() {

		$data['doctor'] = $this->doctor;
		$data['patients'] = Patient::all();
		$data['complaints'] = Complaint::where('doctor_id', '=', $this->doctor->id)->orderBy('created_at', 'desc')->get();

		return View::make('doctor.complaints')->with($data);
	}

	public function getConfirm($id) {

        $confirmAppointment = Appointment::find($id);
        $confirmAppointment->status = "accepted";
        $confirmAppointment->save();

        return Redirect::back();

    }

    public function getDecline($id) {

        $declineAppointment = Appointment::find($id);
        $declineAppointment->status = "decline";
        $declineAppointment->save();

        return Redirect::back();
    }

    public function getResponse($id) {

    	$data['complaint'] = Complaint::find($id);
    	$data['doctor'] = $this->doctor;
		$data['patients'] = Patient::all();

    	return View::make('doctor.response')->with($data);

    }

    public function postResponse() {

    	$respondData = Input::all();
        $respondRules = array(
            'description'    =>'required',
            );
        $respondValidator = Validator::make($respondData,$respondRules);
        if( $respondValidator->passes()) {

            $Respond = new Respond();
            $Respond->complaint_id = Input::get('complaintID');
            $Respond->response = Input::get('description');
            $Respond->patient_id = Complaint::find(Input::get('complaintID'))->patient_id;
            $Respond->doctor_id = $this->doctor->id;

            $Respond->save();

            return Redirect::to('doctor/complaints');


        }
        if($respondValidator->fails()) {
            return Redirect::back()->withInput()->withErrors($respondValidator);
        }

    }
    
}
