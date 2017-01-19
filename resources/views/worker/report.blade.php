@extends('layouts.master')

@section('content')
			<h3>New Worker Report</h3>
			<form method="post" action="worker-view.php">
				<div class="form-group row">
				  <label for="worker-id" class="col-md-3 col-form-label">Worker ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Worker ID" id="worker-id">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-medical-report-copy" class="col-md-3 col-form-label">Medical Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Medical Report Copy" id="worker-medical-report-copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-training-report-copy" class="col-md-3 col-form-label">Training Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Training Report Copy" id="worker-training-report-copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-finger-report-copy" class="col-md-3 col-form-label">Finger Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Finger Report Copy" id="worker-finger-report-copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-man-power-report-copy" class="col-md-3 col-form-label">Man Power Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Man Power Report Copy" id="worker-man-power-report-copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-visa-number-visa-report-copy" class="col-md-3 col-form-label">Visa Number &amp; Visa Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Visa Number &amp; Visa Report Copy" id="worker-visa-number-visa-report-copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-attestion-number-ticket" class="col-md-3 col-form-label">Attestion Number &amp; Ticket</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Attestion Number &amp; Ticket" id="worker-attestion-number-ticket">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-date-of-flight-ticket" class="col-md-3 col-form-label">Date of Flight &amp; Ticket</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Date of Flight &amp; Ticket" id="worker-date-of-flight-ticket">
				  </div>
				</div>

				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
			        <button type="submit" class="btn btn-success">Save</button>
			      </div>
			    </div>

			</form>

@endsection