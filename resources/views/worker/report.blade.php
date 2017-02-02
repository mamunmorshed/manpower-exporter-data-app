@extends('layouts.master')

@section('content')
			<h3>Existing worker</h3>
			<form method="post" enctype="multipart/form-data">
				<div id="login-block">
					<div class="form-group row">
					  <label for="worker-sid" class="col-md-3 col-form-label">Worker ID</label>
					  <div class="col-md-9">
					    <input class="form-control" type="text" placeholder="Worker ID" id="worker-sid" name="sid">
					  </div>
					</div>

					<div class="form-group row"  id="worker-login">
				      <div class="offset-sm-3 col-sm-9">
				        <button class="btn btn-success">Login</button>
				      </div>
				    </div>
				</div>

			    <div class="invisible" id="worker-input-form">
			    	
					<div class="form-group row">
					  <label for="worker-id" class="col-md-3 col-form-label">Worker ID</label>
					  <div class="col-md-9">
					    <input class="form-control" type="text" placeholder="Worker ID" id="worker-id" name="worker_id" disabled="disabled">
					  </div>
					</div>
			    	
					<div class="form-group row">
					  <label for="worker-name" class="col-md-3 col-form-label">Worker Name</label>
					  <div class="col-md-9">
					    <input class="form-control" type="text" placeholder="Worker Name" id="worker-name" name="worker_name" disabled="disabled">
					  </div>
					</div>

				<div class="form-group row">
				  <label for="worker-medical-report-copy" class="col-md-3 col-form-label">Medical Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Medical Report Copy" id="worker-medical-report-copy" name="worker_medical_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-training-report-copy" class="col-md-3 col-form-label">Training Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Training Report Copy" id="worker-training-report-copy" name="worker_training_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-visa-copy" class="col-md-3 col-form-label">Visa Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Visa Copy" id="worker-visa-copy" name="worker_visa">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-attestion-copy" class="col-md-3 col-form-label">Attestion Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Attestion Copy" id="worker-attestion-copy" name="worker_attestion">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-finger-report-copy" class="col-md-3 col-form-label">Finger Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Finger Report Copy" id="worker-finger-report-copy" name="worker_finger_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-man-power-report-copy" class="col-md-3 col-form-label">Man Power Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Man Power Report Copy" id="worker-man-power-report-copy" name="worker_manpower_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-flight-and-ticket-cpy" class="col-md-3 col-form-label">Flight &amp; Ticket Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Flight &amp; Ticket Copy" id="worker-flight-and-ticket-cpy" name="worker_flight">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-other-uploads" class="col-md-3 col-form-label">Other Uploads</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Other Uploads" id="worker-other-uploads" name="worker_other_uploads">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-date-of-flight" class="col-md-3 col-form-label">Date of Flight</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Date of Flight" id="worker-date-of-flight" name="worker_flight_date">
				  </div>
				</div>

					{{ method_field('PATCH') }}
					{{ csrf_field() }}
					<div class="form-group row">
				      <div class="offset-sm-3 col-sm-9">
				        <button type="submit" class="btn btn-success">Save</button>
				      </div>
				    </div>
				</div>

			</form>

@endsection

@push('scripts_footer')
    <script src="{{ asset('js/getworker.js')}}"></script>
@endpush