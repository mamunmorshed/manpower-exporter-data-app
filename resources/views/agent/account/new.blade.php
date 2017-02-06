@extends('layouts.master')

@section('content')

			<h3>New Agent Accounts</h3>
			<form method="post">
			@if ( session()->has('message') )
			    <div class="alert alert-danger">{{ session()->get('message') }}</div>
			@endif
			<div id="login-block">
				<div class="form-group row">
				  <label for="agent-id" class="col-md-2 col-form-label">Agent ID</label>
				  <div class="col-md-10">
				    <input class="form-control" type="text" placeholder="Agent ID" id="agent-sid" name="sid">
				  </div>
				</div>

				<div class="form-group row" id="agent-login">
			      <div class="offset-sm-2 col-sm-10">
			        <button class="btn btn-success">Login</button>
			      </div>
			    </div>
			</div>

			<div class="invisible" id="agent-commission-form">
				
				<div class="form-group row">
				  <label for="worker-id" class="col-md-2 col-form-label">Agetnt ID</label>
				  <div class="col-md-10">
				    <input class="form-control" type="text" placeholder="Agetnt ID" id="worker-id" name="agent_id" disabled="disabled">
				  </div>
				</div>
		    	
				<div class="form-group row">
				  <label for="worker-name" class="col-md-2 col-form-label">Agent Name</label>
				  <div class="col-md-10">
				    <input class="form-control" type="text" placeholder="Agent Name" id="worker-name" name="agent_name" disabled="disabled">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-commission" class="col-md-2 col-form-label">Commission</label>
				  <div class="col-md-5">
				    <input class="form-control" type="number" placeholder="Commission" id="agent-commission" name="agent_commission" readonly="readonly">
				  </div>
				  <div class="col-md-5">
				    <input class="form-control" type="text" placeholder="Reference ID" id="commission-reference" name="commission_reference">
				  </div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
						  <label for="agent-compensation-amount" class="col-md-12 col-form-label">Compensation:</label>
						  <div class="col-md-3">
						    <input class="form-control" type="number" placeholder="Amount" id="agent-compensation-amount" name="agent_compensation_amount">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control datepicker-field" placeholder="Date &amp; Time" id="agent-due-amount-date-time" name="agent_due_amount_date_time">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Reference ID" id="agent-due-amount-reference" name="agent_due_amount_reference">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Remarks" id="agent-due-amount-remarks" name="agent_due_amount_remarks">
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
						  <label for="agent-advance-amount" class="col-md-12 col-form-label">Advance:</label>
						  <div class="col-md-3">
						    <input class="form-control" type="number" placeholder="Amount" id="agent-advance-amount" name="agent_advance_amount">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control datepicker-field" placeholder="Date &amp; Time" id="agent-advance-amount-date-time" name="agent_advance_amount_date_time">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Reference ID" id="agent-advance-amount-reference" name="agent_advance_amount_reference">
						  </div>
						  <div class="col-md-3">
						    <input class="form-control" type="text" placeholder="Remarks" id="agent-advance-amount-remarks" name="agent_advance_amount_remarks">
						  </div>
						</div>
					</div>
				</div>
				<div class="form-group row">
				  <label for="agent-due-amount" class="col-md-2 col-form-label">Due Amount</label>
				  <div class="col-md-10">
				    <input class="form-control" type="number" placeholder="Due Amount" id="agent-due-amount" name="agent_due_amount" readonly="readonly">
				  </div>
				</div>
				{{ csrf_field() }}
				<div class="form-group row">
			      <div class="col-sm-12">
			        <button type="submit" class="btn btn-success">Save</button>
			      </div>
			    </div>
			</div>

			</form>

@endsection

@push('scripts_footer')
    <script src="{{ asset('js/getagent.js')}}"></script>
    <script src="{{ asset('js/accountscalculator.js')}}"></script>
@endpush