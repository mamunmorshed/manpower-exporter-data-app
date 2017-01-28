<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
	
	public function index(){

		return view('agent.account.list');
	}

	public function create(){

		return view('agent.account.new');
	}
	
	public function edit($id){

		return view('agent.account.edit');
	}
	
	public function view($id){

		return view('agent.account.view');
	}
	
	public function store($id){

		return view('agent.account.edit');
	}
	
	public function update($id){

		return view('agent.account.view');
	}
	
}
