@extends('layouts.master')

@section('content')

			<h3>New Agent Accounts</h3>
			<form method="post" action="agent-commission-view.php">
				<div class="form-group row">
				  <label for="agent-id" class="col-md-2 col-form-label">Agent ID</label>
				  <div class="col-md-10">
				    <input class="form-control" type="text" placeholder="Agent ID" id="agent-id">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-commission" class="col-md-2 col-form-label">Commission</label>
				  <div class="col-md-10">
				    <input class="form-control" type="text" placeholder="Commission" id="agent-commission">
				  </div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
						  <label for="agent-compensation-amount" class="col-md-12 col-form-label">Compensation:</label>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Amount" id="agent-compensation-amount">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Date &amp; Time" id="agent-due-amount-date-time">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Reference ID" id="agent-due-amount-date-time">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Remarks" id="agent-due-amount-date-time">
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
						  <label for="agent-compensation-amount" class="col-md-12 col-form-label">Advance:</label>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Amount" id="agent-compensation-amount">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Date &amp; Time" id="agent-due-amount-date-time">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Reference ID" id="agent-due-amount-date-time">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Remarks" id="agent-due-amount-date-time">
						  </div>
						</div>
					</div>
				</div>
				<div class="form-group row">
				  <label for="agent-due-amount" class="col-md-2 col-form-label">Due Amount</label>
				  <div class="col-md-10">
				    <input class="form-control" type="text" placeholder="Due Amount" id="agent-due-amount">
				  </div>
				</div>

				<div class="form-group row">
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-success">Save</button>
			      </div>
			    </div>

			</form>

@endsection