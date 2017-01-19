@extends('layouts.master')

@section('content')
			<h3>New Worker Input</h3>
			<form method="post" action="worker-view.php">
				<div class="form-group row">
				  <label for="worker-id" class="col-md-3 col-form-label">Worker ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Worker ID" id="worker-id">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-agent-id" class="col-md-3 col-form-label">Agent ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Agent ID" id="worker-agent-id">
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="worker-agent-commission" class="col-md-3 col-form-label">Commission</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Commission" id="worker-agent-commission">
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="worker-name-of-agency-in-bangladesh" class="col-md-3 col-form-label">Name of Agency in Bangladesh</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Agency in Bangladesh" id="worker-name-of-agency-in-bangladesh">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-name-of-agency-in-foreign-country" class="col-md-3 col-form-label">Name of Agency in Foreign Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Agency in Foreign Country" id="worker-name-of-agency-in-foreign-country">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-name-of-country" class="col-md-3 col-form-label">Name of Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Country" id="worker-name-of-country">
				  </div>
				</div>

				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
			        <button type="submit" class="btn btn-success">Save</button>
			      </div>
			    </div>

			</form>

@endsection