<?php

namespace App\Http\Controllers;

use App\Account;
use App\Agent;
use App\Worker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class AccountController extends Controller
{
	
	public function index(Request $req){
        if (trim($req->s)){
            $data['agent'] = (new Agent())->where('sid', trim($req->s))->first();

            if (trim($req->from) && trim($req->to)){
                $dateFilter = [['created_at', '>=', trim($req->from)],['created_at', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['accounts'] = Account::SearchByKeyword(trim($req->s))->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (trim($req->from) && !trim($req->to)){
                $dateFilter = [['created_at', '>=', trim($req->from)]];
                $data['accounts'] = Account::SearchByKeyword(trim($req->s))->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (!trim($req->from) && trim($req->to)){
                $dateFilter = [['created_at', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['accounts'] = Account::SearchByKeyword(trim($req->s))->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }else{
                $data['accounts'] = Account::SearchByKeyword(trim($req->s))->orderBy('id', 'desc')->paginate();
            }
            $data['s'] = trim($req->s);
            $data['from'] = trim($req->from);
            $data['to'] = trim($req->to);
        }else{
            if (trim($req->from) && trim($req->to)){
                $dateFilter = [['created_at', '>=', trim($req->from)],['created_at', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['accounts'] = (new Account())->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (trim($req->from) && !trim($req->to)){
                $dateFilter = [['created_at', '>=', trim($req->from)]];
                $data['accounts'] = (new Account())->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }elseif (!trim($req->from) && trim($req->to)){
                $dateFilter = [['created_at', '<=', (new Carbon(trim($req->to)))->addDay(1)]];
                $data['accounts'] = (new Account())->where($dateFilter)->orderBy('id', 'desc')->paginate();
            }else{
                $data['accounts'] = (new Account())->orderBy('id', 'desc')->paginate();
            }

            $data['from'] = trim($req->from);
            $data['to'] = trim($req->to);
        }

        return view('agent.account.list', $data);
	}

	public function create(){

		return view('agent.account.new');
	}
	
	public function edit($id){

		return view('agent.account.edit');
	}
	
	public function view($id){
		$data['account'] = (new Account())->with('accountAgent')->where('id', $id)->first();
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
