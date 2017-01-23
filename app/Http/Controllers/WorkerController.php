<?php

namespace App\Http\Controllers;

use App\Traits\HumanReadableID;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkerController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

	/**
	 *  Store New Worker info
	 * into the database
	 *
	 */

	use HumanReadableID;

	public function index(){

		$data['workers'] = (new Worker())->orderBy('id', 'desc')->get();
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

    public function store(Request $req){
    	
		$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$worker = new Worker();
    	
    	$worker->name = strtoupper($req->name);
		$worker->husband_or_father = strtoupper($req->husband_or_father);
		$worker->nationality = strtoupper($req->nationality);
		$worker->dob = strtoupper($req->dob);
		$worker->present_address = strtoupper($req->present_address);
		$worker->permanent_address = strtoupper($req->permanent_address);
		$worker->mobile_no = strtoupper($req->mobile_no);
		$worker->family_mobile_no = strtoupper($req->family_mobile_no);
		$worker->voter_id_no = strtoupper($req->voter_id_no);
		$worker->passport_no = strtoupper($req->passport_no);
		$worker->passport_issue_date = strtoupper($req->passport_issue_date);
		$worker->passport_expiry_date = strtoupper($req->passport_expiry_date);
		if ($req->hasFile('passport_scan_copy') 
			&& $req->file('passport_scan_copy')->isValid() 
			&& in_array(strtolower($req->passport_scan_copy->extension()), $validImageFormats)) {
			$worker->passport_scan_copy = $req->passport_scan_copy->store('images');
		}
		if ($req->hasFile('photo') 
			&& $req->file('photo')->isValid()
			&& in_array(strtolower($req->photo->extension()), $validImageFormats)) {
			$worker->photo = $req->photo->store('images');
		}
		$worker->experience_details = strtoupper($req->experience_details);
		$worker->save();

		$worker->sid = $this->generate($worker->id);
		$worker->save();

		return redirect("/workers/{$worker->sid}");

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
	   	// return (new Worker())->where('sid', $id)->first();

	   	// $data['worker'] = (new Worker())->where('sid', $id)->first();
	   	// $data['edit_url'] = url("/workers/{$id}/edit");
	   	// if ($data['worker']) {
	    // 	return view('worker.view', $data);
	   	// }else{
	   	// 	return redirect('workers');
	   	// }

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

    public function update(Request $req, $id){
    	
		$validImageFormats = ['png', 'jpg', 'jpeg'];

    	$worker = (new Worker())->where('sid', $id)->first();
    	
    	$worker->name = strtoupper($req->name);
    	$worker->agent = strtoupper($req->agentid);
		$worker->husband_or_father = strtoupper($req->husband_or_father);
		$worker->nationality = strtoupper($req->nationality);
		$worker->dob = strtoupper($req->dob);
		$worker->present_address = strtoupper($req->present_address);
		$worker->permanent_address = strtoupper($req->permanent_address);
		$worker->mobile_no = strtoupper($req->mobile_no);
		$worker->family_mobile_no = strtoupper($req->family_mobile_no);
		$worker->voter_id_no = strtoupper($req->voter_id_no);
		$worker->passport_no = strtoupper($req->passport_no);
		$worker->passport_issue_date = strtoupper($req->passport_issue_date);
		$worker->passport_expiry_date = strtoupper($req->passport_expiry_date);
		if ($req->hasFile('passport_scan_copy') 
			&& $req->file('passport_scan_copy')->isValid() 
			&& in_array(strtolower($req->passport_scan_copy->extension()), $validImageFormats)) {
			$worker->passport_scan_copy = $req->passport_scan_copy->store('images');
		}
		if ($req->hasFile('photo') 
			&& $req->file('photo')->isValid()
			&& in_array(strtolower($req->photo->extension()), $validImageFormats)) {
			$worker->photo = $req->photo->store('images');
		}
		$worker->experience_details = strtoupper($req->experience_details);
		$worker->save();

		$worker->sid = $this->generate($worker->id);
		$worker->save();

		return redirect("/workers/{$worker->sid}");

    }


}
