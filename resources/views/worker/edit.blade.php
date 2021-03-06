@extends('layouts.master')

@section('content')

			<h3>Edit Worker</h3>
			@if ( session()->has('message') )
				<div class="alert alert-danger">{{ session()->get('message') }}</div>
			@endif
			<form method="post" enctype="multipart/form-data">

			    <input type="hidden" value="{{ $worker->sid }}" name="sid">

				<div class="form-group row">
				  <label for="worker-agent-id" class="col-md-3 col-form-label">Agent ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Agent ID" id="worker-agent-id" value="{{ $worker->agent or '' }}" name="agentid">
				  </div>
				</div>
				
				
				<div class="form-group row">
				  <label for="worker-name" class="col-md-3 col-form-label">Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name" id="worker-name"  value="{{ $worker->name or '' }}" name="name">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-husband-father-name" class="col-md-3 col-form-label">Husband / Father Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Husband / Father Name" id="worker-husband-father-name"  value="{{ $worker->husband_or_father or '' }}" name="husband_or_father">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-nationality" class="col-md-3 col-form-label">Nationality</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Nationality" id="worker-nationality"  value="{{ $worker->nationality or '' }}" name="nationality">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-dob" class="col-md-3 col-form-label">Date of Birth</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Date of Birth" id="worker-dob"  value="{{ $worker->dob or '' }}" name="dob">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-present-address" class="col-md-3 col-form-label">Present Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Present Address" id="worker-present-address"  value="{{ $worker->present_address or '' }}" name="present_address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-permanent-address" class="col-md-3 col-form-label">Permanent Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Permanent Address" id="worker-permanent-address"  value="{{ $worker->permanent_address or '' }}" name="permanent_address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-mobile-number" class="col-md-3 col-form-label">Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Mobile No." id="worker-mobile-number"  value="{{ $worker->mobile_no or '' }}" name="mobile_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-family-mobile-number" class="col-md-3 col-form-label">Family Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Family Mobile No." id="worker-family-mobile-number"  value="{{ $worker->family_mobile_no or '' }}" name="family_mobile_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-voter-id-number" class="col-md-3 col-form-label">Voter ID No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Voter ID No." id="worker-voter-id-number"  value="{{ $worker->voter_id_no or '' }}" name="voter_id_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-number" class="col-md-3 col-form-label">Passport No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport No." id="worker-passport-number"  value="{{ $worker->passport_no or '' }}" name="passport_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-issue-date" class="col-md-3 col-form-label">Passport Issue Date</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Passport Issue Date" id="worker-passport-issue-date"  value="{{ $worker->passport_issue_date or '' }}" name="passport_issue_date">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-expiry-date" class="col-md-3 col-form-label">Passport Expiry Date</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Passport Expiry Date" id="worker-passport-expiry-date"  value="{{ $worker->passport_expiry_date or '' }}" name="passport_expiry_date">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-scan-copy" class="col-md-3 col-form-label">Passport Scan Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Passport Scan Copy" id="worker-passport-scan-copy"  value="{{ $worker->passport_scan_copy or '' }}" name="passport_scan_copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-pp-size-photo" class="col-md-3 col-form-label">P.P. Size Photo</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="P.P. Size Photo" id="worker-pp-size-photo"  value="{{ $worker->photo or '' }}" name="photo">
				  </div>
				</div>

				<div class="form-group row">
					<label for="worker-experience-time-country" class="col-md-3 col-form-label">Experience Time &amp; Country</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="Experience Time &amp; Country" id="worker-experience-time-country"  value="{{ $worker->experience_details or '' }}" name="experience_details">
					</div>
				</div>

				<div class="form-group row">
					<label for="worker-status" class="col-md-3 col-form-label">Status</label>
					<div class="col-md-9">
						<input class="form-control" type="text" placeholder="Status" id="worker-status"  value="{{ $worker->status or '' }}" name="status">
					</div>
				</div>


				<div class="form-group row">
				  <label for="worker-name-of-agency-in-bangladesh" class="col-md-3 col-form-label">Name of Agency in Bangladesh</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Agency in Bangladesh" id="worker-name-of-agency-in-bangladesh"  value="{{ $worker->agency_in_bd or '' }}" name="agency_in_bd">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-name-of-agency-in-foreign-country" class="col-md-3 col-form-label">Name of Agency in Foreign Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Agency in Foreign Country" id="worker-name-of-agency-in-foreign-country"  value="{{ $worker->agency_abroad or '' }}" name="agency_abroad">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-name-of-country" class="col-md-3 col-form-label">Name of Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Country" id="worker-name-of-country"  value="{{ $worker->country or '' }}" name="country">
				  </div>
				</div><div class="form-group row">
				  <label for="worker-medical-report-copy" class="col-md-3 col-form-label">Medical Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Medical Report Copy" id="worker-medical-report-copy" value="{{ $worker->medical_report or '' }}" name="worker_medical_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-training-report-copy" class="col-md-3 col-form-label">Training Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Training Report Copy" id="worker-training-report-copy" value="{{ $worker->training_report or '' }}" name="worker_training_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-visa-copy" class="col-md-3 col-form-label">Visa Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Visa Copy" id="worker-visa-copy" value="{{ $worker->visa_report or '' }}" name="worker_visa">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-attestion-copy" class="col-md-3 col-form-label">Attestion Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Attestion Copy" id="worker-attestion-copy" value="{{ $worker->attestion or '' }}" name="worker_attestion">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-finger-report-copy" class="col-md-3 col-form-label">Finger Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Finger Report Copy" id="worker-finger-report-copy" value="{{ $worker->finger_report or '' }}" name="worker_finger_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-man-power-report-copy" class="col-md-3 col-form-label">Man Power Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Man Power Report Copy" id="worker-man-power-report-copy" value="{{ $worker->man_power_report or '' }}" name="worker_manpower_report">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-flight-and-ticket-cpy" class="col-md-3 col-form-label">Flight &amp; Ticket Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Flight &amp; Ticket Copy" id="worker-flight-and-ticket-cpy" value="{{ $worker->ticket or '' }}" name="worker_flight">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-other-uploads" class="col-md-3 col-form-label">Other Uploads</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Other Uploads" id="worker-other-uploads" value="{{ $worker->other_uploads or '' }}" name="worker_other_uploads">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-date-of-flight" class="col-md-3 col-form-label">Date of Flight</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Date of Flight" id="worker-date-of-flight" value="{{ $worker->flight_date or '' }}" name="worker_flight_date">
				  </div>
				</div>

				{{ csrf_field() }}
				{{ method_field('PATCH') }}

				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
			        <button type="submit" class="btn btn-success">Update</button>
			      </div>
			    </div>

			</form>

@endsection