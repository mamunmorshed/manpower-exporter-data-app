<?php

namespace App\Http\Controllers;

use App\Account;
use App\Agent;
use App\Worker;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class AccountController extends Controller
{
	
	public function index(){
	
		$data['accounts'] = (new Account())->orderBy('id', 'desc')->paginate();
		if (count($data['accounts'])) {
			return view('agent.account.list', $data);
		}else{
			
		}
	}

	public function create(){

		return view('agent.account.new');
	}
	
	public function edit($id){

		return view('agent.account.edit');
	}
	
	public function view($id){
		$data['account'] = (new Account())->where('id', $id)->first();

		return view('agent.account.view', $data);
	}
	
	public function store(Request $req){
		
		$account = new Account();

		$account->agent = strtoupper($req->sid);
    	if (!(new Agent())->where('sid', $account->agent)->first()) {
    	 	return redirect('/agents/accounts/new')->with('message', 'Agent not found');
    	 } 

		$account->commission = (int)$req->agent_commission;
		$account->compensation_amount = (int)$req->agent_compensation_amount;
		if ($req->agent_due_amount_date_time) { $account->compensation_date = $req->agent_due_amount_date_time;	}
		$account->compensation_reference = strtoupper($req->agent_due_amount_reference);
		$account->compensation_remarks = strtoupper($req->agent_due_amount_remarks);
		$account->advance_amount = (int)$req->agent_advance_amount;
		if ($req->agent_advance_amount_date_time) { $account->advance_date = $req->agent_advance_amount_date_time;	}
		$account->advance_reference = strtoupper($req->agent_advance_amount_reference);
		$account->advance_remarks = strtoupper($req->agent_advance_amount_remarks);
		$account->due_amount = (int)$req->agent_due_amount;
		
		$account->save();

		return redirect('/agents/accounts/'.$account->id.'/view');
	}
	
	public function update($id){

		return view('agent.account.view');
	}
	
}
