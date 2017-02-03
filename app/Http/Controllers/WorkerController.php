<?php

namespace App\Http\Controllers;

use App\Traits\HumanReadableID;
use App\Agent;
use App\Worker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;


class WorkerController extends Controller
{

	use HumanReadableID;

	public function index(Request $req){
        if (trim($req->s)){
            if (trim($req->from) && trim($req->to)){
                $dateFilter = [['flight_date', '>=', trim($req->from)],['flight_date', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['workers'] = Worker::SearchByKeyword(trim($req->s))->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (trim($req->from) && !trim($req->to)){
                $dateFilter = [['flight_date', '>=', trim($req->from)]];
                $data['workers'] = Worker::SearchByKeyword(trim($req->s))->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (!trim($req->from) && trim($req->to)){
                $dateFilter = [['flight_date', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['workers'] = Worker::SearchByKeyword(trim($req->s))->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }else{
                $data['workers'] = Worker::SearchByKeyword(trim($req->s))->orderBy('id', 'desc')->paginate();
            }
            $data['s'] = trim($req->s);
            $data['from'] = trim($req->from);
            $data['to'] = trim($req->to);
        }else{
            if (trim($req->from) && trim($req->to)){
                $dateFilter = [['flight_date', '>=', trim($req->from)],['flight_date', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['workers'] = (new Worker())->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (trim($req->from) && !trim($req->to)){
                $dateFilter = [['flight_date', '>=', trim($req->from)]];
                $data['workers'] = (new Worker())->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (!trim($req->from) && trim($req->to)){
                $dateFilter = [['flight_date', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['workers'] = (new Worker())->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }else{
                $data['workers'] = (new Worker())->orderBy('id', 'desc')->paginate();
            }

            $data['from'] = trim($req->from);
            $data['to'] = trim($req->to);
        }

        $data['workers']->setPath($req->fullUrl());

        return view('worker.list', $data);
	}

	public function create(){
		return view('worker.new');
	}

	public function createInput(){
		return view('worker.input');
	}

	public function createReport(){
		return view('worker.report');
	}

    public function show($id)
    {

	   	$data['worker'] = (new Worker())->where('sid', $id)->first();
	   	$data['edit_url'] = url("/workers/{$id}/edit");
	   	if ($data['worker']) {
	    	return view('worker.view', $data);
	   	}else{
	   		return redirect('workers');
	   	}

    }

    public function showJSON($id)
    {
    	$worker = (new Worker())->where('sid', $id)->first();
    	if ($worker) {
    		return $worker;
    	}else{
    		return response('', 404);
    	}
    }

    public function edit($id)
    {

	   	$data['worker'] = (new Worker())->where('sid', $id)->first();

	   	if ($data['worker']) {
	    	return view('worker.edit', $data);
	   	}else{
	   		return redirect('workers');
	   	}

    }

    public function store(Request $req){
    	
		$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$worker = new Worker();
    	
    	if ($req->name) {$worker->name = strtoupper($req->name);}
		if ($req->husband_or_father) {$worker->husband_or_father = strtoupper($req->husband_or_father);}
		if ($req->nationality) {$worker->nationality = strtoupper($req->nationality);}
		if ($req->dob) {$worker->dob = $req->dob;}
		if ($req->present_address) {$worker->present_address = strtoupper($req->present_address);}
		if ($req->permanent_address) {$worker->permanent_address = strtoupper($req->permanent_address);}
		if ($req->mobile_no) {$worker->mobile_no = strtoupper($req->mobile_no);}
		if ($req->family_mobile_no) {$worker->family_mobile_no = strtoupper($req->family_mobile_no);}
		if ($req->voter_id_no) {$worker->voter_id_no = strtoupper($req->voter_id_no);}
		if ($req->passport_no) {$worker->passport_no = strtoupper($req->passport_no);}
		if ($req->passport_issue_date) {$worker->passport_issue_date = $req->passport_issue_date;}
		if ($req->passport_expiry_date) {$worker->passport_expiry_date = $req->passport_expiry_date;}
		if ($req->hasFile('passport_scan_copy') 
			&& $req->file('passport_scan_copy')->isValid() 
			&& in_array(strtolower($req->passport_scan_copy->extension()), $validImageFormats)) {
			$worker->passport_scan_copy = $req->passport_scan_copy->store('public/images');
		}
		if ($req->hasFile('photo') 
			&& $req->file('photo')->isValid()
			&& in_array(strtolower($req->photo->extension()), $validImageFormats)) {
			$worker->photo = $req->photo->store('public/images');
		}
		if ($req->experience_details) {$worker->experience_details = strtoupper($req->experience_details);}
        if ($req->status) {$worker->status = strtoupper($req->status);}
		$worker->save();

		$worker->sid = $this->generate($worker->id);
		$worker->save();

		return redirect("/workers/{$worker->sid}");

    }


    public function input(Request $req){

    	$worker = (new Worker())->where('sid', $req->sid)->first();

    	if ($req->worker_agent_id) {$worker->agent = strtoupper($req->worker_agent_id);}

    	if (!(new Agent())->where('sid', $worker->agent)->first()) {
    	 	return redirect('/workers/new/input')->with('message', 'Agent not found');
    	 	// return redirect()->route('homepage')->with('message', 'I am so frustrated.');
        }


		if ($req->worker_commission) {$worker->commission = (int)$req->worker_commission;}
		if ($req->worker_agency_in_bd) {$worker->agency_in_bd = strtoupper($req->worker_agency_in_bd);}
		if ($req->worker_agency_abroad) {$worker->agency_abroad = strtoupper($req->worker_agency_abroad);}
		if ($req->worker_country) {$worker->country = strtoupper($req->worker_country);}

		$worker->save();

		return redirect("/workers/{$req->sid}");

    }

    public function report(Request $req){
    	$filesToDelete = [];
		$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$worker = (new Worker())->where('sid', $req->sid)->first();

		if ($req->hasFile('worker_medical_report') 
			&& $req->file('worker_medical_report')->isValid() 
			&& in_array(strtolower($req->worker_medical_report->extension()), $validImageFormats)) {

			if ($worker->medical_report) { $filesToDelete[] = $worker->medical_report; }	
			$worker->medical_report = $req->worker_medical_report->store('public/images');
			
		}
		if ($req->hasFile('worker_training_report') 
			&& $req->file('worker_training_report')->isValid() 
			&& in_array(strtolower($req->worker_training_report->extension()), $validImageFormats)) {
			
			if ($worker->training_report) { $filesToDelete[] = $worker->training_report; }	
			$worker->training_report = $req->worker_training_report->store('public/images');
			
		}
		if ($req->hasFile('worker_visa') 
			&& $req->file('worker_visa')->isValid() 
			&& in_array(strtolower($req->worker_visa->extension()), $validImageFormats)) {
			
			if ($worker->visa_report) { $filesToDelete[] = $worker->visa_report; }	
			$worker->visa_report = $req->worker_visa->store('public/images');
			
		}
		if ($req->hasFile('worker_attestion') 
			&& $req->file('worker_attestion')->isValid() 
			&& in_array(strtolower($req->worker_attestion->extension()), $validImageFormats)) {
			
			if ($worker->attestion) { $filesToDelete[] = $worker->attestion; }
			$worker->attestion = $req->worker_attestion->store('public/images');

		}
		if ($req->hasFile('worker_finger_report') 
			&& $req->file('worker_finger_report')->isValid() 
			&& in_array(strtolower($req->worker_finger_report->extension()), $validImageFormats)) {
			
			if ($worker->finger_report) { $filesToDelete[] = $worker->finger_report; }
			$worker->finger_report = $req->worker_finger_report->store('public/images');
			
		}
		if ($req->hasFile('worker_manpower_report') 
			&& $req->file('worker_manpower_report')->isValid() 
			&& in_array(strtolower($req->worker_manpower_report->extension()), $validImageFormats)) {
			
			if ($worker->man_power_report) { $filesToDelete[] = $worker->man_power_report; }
			$worker->man_power_report = $req->worker_manpower_report->store('public/images');
			
		}
		if ($req->hasFile('worker_flight') 
			&& $req->file('worker_flight')->isValid() 
			&& in_array(strtolower($req->worker_flight->extension()), $validImageFormats)) {
			
			if ($worker->ticket) { $filesToDelete[] = $worker->ticket; }
			$worker->ticket = $req->worker_flight->store('public/images');
			
		}
		if ($req->hasFile('worker_other_uploads') 
			&& $req->file('worker_other_uploads')->isValid() 
			&& in_array(strtolower($req->worker_other_uploads->extension()), $validImageFormats)) {
			
			if ($worker->other_uploads) { $filesToDelete[] = $worker->other_uploads; }
			$worker->other_uploads = $req->worker_other_uploads->store('public/images');

		}
		if ($worker->flight_date) {$worker->flight_date = $req->worker_flight_date;}
    	
    	if ($filesToDelete) {
	    	Storage::delete($filesToDelete);
    	}

		$worker->save();

		return redirect("/workers/{$req->sid}");

    }

    public function update(Request $req, $id){
    	if(!$req->sid === $id){ return redirect("/workers/");}

    	$filesToDelete = [];
		$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$worker = (new Worker())->where('sid', $req->sid)->first();
    	
    	if ($req->name) {$worker->name = strtoupper($req->name); }
    	if ($req->agentid) {$worker->agent = strtoupper($req->agentid);
            if (!(new Agent())->where('sid', $worker->agent)->first()) {
                return redirect('/workers/'.$req->sid.'/edit')->with('message', 'Agent not found');
                // return redirect()->route('homepage')->with('message', 'I am so frustrated.');
            }
    	}
        if ($req->husband_or_father) {$worker->husband_or_father = strtoupper($req->husband_or_father); }
		if ($req->nationality) {$worker->nationality = strtoupper($req->nationality); }
		if ($req->dob) {$worker->dob = $req->dob; }
		if ($req->present_address) {$worker->present_address = strtoupper($req->present_address); }
		if ($req->permanent_address) {$worker->permanent_address = strtoupper($req->permanent_address); }
		if ($req->mobile_no) {$worker->mobile_no = strtoupper($req->mobile_no); }
		if ($req->family_mobile_no) {$worker->family_mobile_no = strtoupper($req->family_mobile_no); }
		if ($req->voter_id_no) {$worker->voter_id_no = strtoupper($req->voter_id_no); }
		if ($req->passport_no) {$worker->passport_no = strtoupper($req->passport_no); }
		if ($req->passport_issue_date) {$worker->passport_issue_date = $req->passport_issue_date; }
		if ($req->passport_expiry_date) {$worker->passport_expiry_date = $req->passport_expiry_date; }
		if ($req->hasFile('passport_scan_copy') 
			&& $req->file('passport_scan_copy')->isValid() 
			&& in_array(strtolower($req->passport_scan_copy->extension()), $validImageFormats)) {

			if ($worker->passport_scan_copy) { $filesToDelete[] = $worker->passport_scan_copy; }
			$worker->passport_scan_copy = $req->passport_scan_copy->store('public/images');

		}
		if ($req->hasFile('photo') 
			&& $req->file('photo')->isValid()
			&& in_array(strtolower($req->photo->extension()), $validImageFormats)) {
			
			if ($worker->photo) { $filesToDelete[] = $worker->photo; }	
			$worker->photo = $req->photo->store('public/images');

		}
		if ($req->experience_details) {$worker->experience_details = strtoupper($req->experience_details);}
		if ($req->status) {$worker->status = strtoupper($req->status);}

		if ($req->worker_agent_id) {$worker->agent = strtoupper($req->worker_agent_id);}
		if ($req->worker_commission) {$worker->commission = (int)$req->worker_commission;}
		if ($req->worker_agency_in_bd) {$worker->agency_in_bd = strtoupper($req->worker_agency_in_bd);}
		if ($req->worker_agency_abroad) {$worker->agency_abroad = strtoupper($req->worker_agency_abroad);}
		if ($req->worker_country) {$worker->country = strtoupper($req->worker_country);}
		
		if ($req->hasFile('worker_medical_report') 
			&& $req->file('worker_medical_report')->isValid() 
			&& in_array(strtolower($req->worker_medical_report->extension()), $validImageFormats)) {

			if ($worker->medical_report) { $filesToDelete[] = $worker->medical_report; }	
			$worker->medical_report = $req->worker_medical_report->store('public/images');
			
		}
		if ($req->hasFile('worker_training_report') 
			&& $req->file('worker_training_report')->isValid() 
			&& in_array(strtolower($req->worker_training_report->extension()), $validImageFormats)) {
			
			if ($worker->training_report) { $filesToDelete[] = $worker->training_report; }	
			$worker->training_report = $req->worker_training_report->store('public/images');
			
		}
		if ($req->hasFile('worker_visa') 
			&& $req->file('worker_visa')->isValid() 
			&& in_array(strtolower($req->worker_visa->extension()), $validImageFormats)) {
			
			if ($worker->visa_report) { $filesToDelete[] = $worker->visa_report; }	
			$worker->visa_report = $req->worker_visa->store('public/images');
			
		}
		if ($req->hasFile('worker_attestion') 
			&& $req->file('worker_attestion')->isValid() 
			&& in_array(strtolower($req->worker_attestion->extension()), $validImageFormats)) {
			
			if ($worker->attestion) { $filesToDelete[] = $worker->attestion; }
			$worker->attestion = $req->worker_attestion->store('public/images');

		}
		if ($req->hasFile('worker_finger_report') 
			&& $req->file('worker_finger_report')->isValid() 
			&& in_array(strtolower($req->worker_finger_report->extension()), $validImageFormats)) {
			
			if ($worker->finger_report) { $filesToDelete[] = $worker->finger_report; }
			$worker->finger_report = $req->worker_finger_report->store('public/images');
			
		}
		if ($req->hasFile('worker_manpower_report') 
			&& $req->file('worker_manpower_report')->isValid() 
			&& in_array(strtolower($req->worker_manpower_report->extension()), $validImageFormats)) {
			
			if ($worker->man_power_report) { $filesToDelete[] = $worker->man_power_report; }
			$worker->man_power_report = $req->worker_manpower_report->store('public/images');
			
		}
		if ($req->hasFile('worker_flight') 
			&& $req->file('worker_flight')->isValid() 
			&& in_array(strtolower($req->worker_flight->extension()), $validImageFormats)) {
			
			if ($worker->ticket) { $filesToDelete[] = $worker->ticket; }
			$worker->ticket = $req->worker_flight->store('public/images');
			
		}
		if ($req->hasFile('worker_other_uploads') 
			&& $req->file('worker_other_uploads')->isValid() 
			&& in_array(strtolower($req->worker_other_uploads->extension()), $validImageFormats)) {
			
			if ($worker->other_uploads) { $filesToDelete[] = $worker->other_uploads; }
			$worker->other_uploads = $req->worker_other_uploads->store('public/images');

		}
		if ($req->worker_flight_date) {$worker->flight_date = $req->worker_flight_date;}
    	
    	if ($filesToDelete) {
	    	Storage::delete($filesToDelete);
    	}
		$worker->save();

		return redirect("/workers/{$req->sid}");

    }


    public function destroy($id)
    {
    	$filesToDelete = [];
    	$worker = (new Worker())->where('sid', $id)->first();
    	if ($worker->passport_scan_copy) { $filesToDelete[] = $worker->passport_scan_copy; }
    	if ($worker->photo) { $filesToDelete[] = $worker->photo; }
    	if ($worker->medical_report) { $filesToDelete[] = $worker->medical_report; }
    	if ($worker->training_report) { $filesToDelete[] = $worker->training_report; }
    	if ($worker->finger_report) { $filesToDelete[] = $worker->finger_report; }
    	if ($worker->man_power_report) { $filesToDelete[] = $worker->man_power_report; }
    	if ($worker->visa_report) { $filesToDelete[] = $worker->visa_report; }
    	if ($worker->attestion) { $filesToDelete[] = $worker->attestion; }
    	if ($worker->ticket) { $filesToDelete[] = $worker->ticket; }
    	if ($worker->other_uploads) { $filesToDelete[] = $worker->other_uploads; }
    	if ($filesToDelete) {
	    	Storage::delete($filesToDelete);
    	}
    	$worker->delete();
    	return redirect("/workers/");
    }


}
