<?php

namespace App\Http\Controllers;

use App\Account;
use App\Agent;
use App\Worker;
use App\Traits\HumanReadableID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AgentController extends Controller
{
	use HumanReadableID; 

	public function index(Request $req){
	    if (trim($req->s)){
            $data['agents'] = Agent::SearchByKeyword(trim($req->s))->orderBy('id', 'desc')->paginate();
            $data['agents']->setPath($req->fullUrl());
            $data['s'] = trim($req->s);
        }else{
            $data['agents'] = (new Agent())->orderBy('id', 'desc')->paginate();
        }
		if (count($data['agents'])) {
			return view('agent.list', $data);
		}else{
			
		}
	}

    public function create(){
    	return view('agent.new');
    }

    public function show($id)
    {

	   	$data['agent'] = (new Agent())->where('sid', $id)->first();
	   	$data['edit_url'] = url("/agents/{$id}/edit");
	   	if ($data['agent']) {
	    	return view('agent.view', $data);
	   	}else{
	   		return redirect('agents');
	   	}

    }

    public function showJSON($id)
    {
    	$agent = (new Agent())->where('sid', $id)->first();
    	if ($agent) {
    		$totalCommission = (new Worker())->where('agent', $id)->sum('commission');
    		$totalCompensation = (new Account())->where('agent', $id)->sum('compensation_amount');
    		$totalAdvance = (new Account())->where('agent', $id)->sum('advance_amount');
    		$agent->commission = $totalCommission -$totalCompensation - $totalAdvance;

    		return $agent;
    	}else{
    		return response('', 404);
    	}
    }

    public function edit($id)
    {

	   	$data['agent'] = (new Agent())->where('sid', $id)->first();

	   	if ($data['agent']) {
	    	return view('agent.edit', $data);
	   	}else{
	   		return redirect('agents');
	   	}

    }

    public function store(Request $req){
    	$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$agent = new Agent();
    	
    	if ($req->name) {$agent->name = strtoupper($req->name);}
		if ($req->father_name) {$agent->father_name = strtoupper($req->father_name);}
		if ($req->nationality) {$agent->nationality = strtoupper($req->nationality);}
		if ($req->dob) {$agent->dob = $req->dob;}
		if ($req->present_address) {$agent->present_address = strtoupper($req->present_address);}
		if ($req->permanent_address) {$agent->permanent_address = strtoupper($req->permanent_address);}
		if ($req->mobile) {$agent->mobile = strtoupper($req->mobile);}
		if ($req->voter_id) {$agent->voter_id = strtoupper($req->voter_id);}
		if ($req->passport) {$agent->passport = strtoupper($req->passport);}
		if ($req->passport_issue) {$agent->passport_issue = $req->passport_issue;}
		if ($req->passport_expiry) {$agent->passport_expiry = $req->passport_expiry;}

		if ($req->hasFile('passport_scan') 
			&& $req->file('passport_scan')->isValid() 
			&& in_array(strtolower($req->passport_scan->extension()), $validImageFormats)) {
			$agent->passport_scan = $req->passport_scan->store('public/images');
		}
		if ($req->hasFile('photo') 
			&& $req->file('photo')->isValid()
			&& in_array(strtolower($req->photo->extension()), $validImageFormats)) {
			$agent->photo = $req->photo->store('public/images');
		}

		if ($req->email) {$agent->email = strtoupper($req->email);}
		$agent->save();

		$agent->sid = $this->generate($agent->id, false);
		$agent->save();
		
		return redirect("/agents/{$agent->sid}");
    }



    public function update(Request $req, $id){
    	if(!$req->sid === $id){ return redirect("/agents/");}

    	$filesToDelete = [];
		$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$agent = (new Agent())->where('sid', $req->sid)->first();
    	
    	if ($req->name) {$agent->name = strtoupper($req->name);}
		if ($req->father_name) {$agent->father_name = strtoupper($req->father_name);}
		if ($req->nationality) {$agent->nationality = strtoupper($req->nationality);}
		if ($req->dob) {$agent->dob = $req->dob;}
		if ($req->present_address) {$agent->present_address = strtoupper($req->present_address);}
		if ($req->permanent_address) {$agent->permanent_address = strtoupper($req->permanent_address);}
		if ($req->mobile) {$agent->mobile = strtoupper($req->mobile);}
		if ($req->voter_id) {$agent->voter_id = strtoupper($req->voter_id);}
		if ($req->passport) {$agent->passport = strtoupper($req->passport);}
		if ($req->passport_issue) {$agent->passport_issue = $req->passport_issue;}
		if ($req->passport_expiry) {$agent->passport_expiry = $req->passport_expiry;}

		if ($req->hasFile('passport_scan') 
			&& $req->file('passport_scan')->isValid() 
			&& in_array(strtolower($req->passport_scan->extension()), $validImageFormats)) {
			
			if ($agent->passport_scan) { $filesToDelete[] = $agent->passport_scan; }	
			$agent->passport_scan = $req->passport_scan->store('public/images');

		}
		if ($req->hasFile('photo') 
			&& $req->file('photo')->isValid()
			&& in_array(strtolower($req->photo->extension()), $validImageFormats)) {

			if ($agent->photo) { $filesToDelete[] = $agent->photo; }	
			$agent->photo = $req->photo->store('public/images');

		}

		if ($req->email) {$agent->email = strtoupper($req->email);}
  	
    	if ($filesToDelete) {
	    	Storage::delete($filesToDelete);
    	}
		$agent->save();

		return redirect("/agents/{$req->sid}");

    }

}
