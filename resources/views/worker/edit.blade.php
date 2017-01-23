@extends('layouts.master')

@section('content')

			<h3>Edit Worker</h3>

			<form method="post" enctype="multipart/form-data">

				<div class="form-group row">
				  <label for="worker-agent-id" class="col-md-3 col-form-label">Agent ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Agent ID" id="worker-agent-id" value="{{ $worker->agent or '' }}">
				  </div>
				</div>
				
				
				<div class="form-group row">
				  <label for="worker-name" class="col-md-3 col-form-label">Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name" id="worker-name"  value="{{ $worker->name or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-husband-father-name" class="col-md-3 col-form-label">Husband / Father Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Husband / Father Name" id="worker-husband-father-name"  value="{{ $worker->husband_or_father or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-nationality" class="col-md-3 col-form-label">Nationality</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Nationality" id="worker-nationality"  value="{{ $worker->nationality or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-dob" class="col-md-3 col-form-label">Date of Birth</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Date of Birth" id="worker-dob"  value="{{ $worker->dob or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-present-address" class="col-md-3 col-form-label">Present Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Present Address" id="worker-present-address"  value="{{ $worker->present_address or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-permanent-address" class="col-md-3 col-form-label">Permanent Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Permanent Address" id="worker-permanent-address"  value="{{ $worker->permanent_address or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-mobile-number" class="col-md-3 col-form-label">Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Mobile No." id="worker-mobile-number"  value="{{ $worker->mobile_no or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-family-mobile-number" class="col-md-3 col-form-label">Family Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Family Mobile No." id="worker-family-mobile-number"  value="{{ $worker->family_mobile_no or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-voter-id-number" class="col-md-3 col-form-label">Voter ID No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Voter ID No." id="worker-voter-id-number"  value="{{ $worker->voter_id_no or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-number" class="col-md-3 col-form-label">Passport No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport No." id="worker-passport-number"  value="{{ $worker->passport_no or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-issue-date" class="col-md-3 col-form-label">Passport Issue Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport Issue Date" id="worker-passport-issue-date"  value="{{ $worker->passport_issue_date or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-expiry-date" class="col-md-3 col-form-label">Passport Expiry Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport Expiry Date" id="worker-passport-expiry-date"  value="{{ $worker->passport_expiry_date or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-scan-copy" class="col-md-3 col-form-label">Passport Scan Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Passport Scan Copy" id="worker-passport-scan-copy"  value="{{ $worker->passport_scan_copy or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-pp-size-photo" class="col-md-3 col-form-label">P.P. Size Photo</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="P.P. Size Photo" id="worker-pp-size-photo"  value="{{ $worker->photo or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-experience-time-country" class="col-md-3 col-form-label">Experience Time &amp; Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Experience Time &amp; Country" id="worker-experience-time-country"  value="{{ $worker->experience_details or '' }}">
				  </div>
				</div>


				<div class="form-group row">
				  <label for="worker-name-of-agency-in-bangladesh" class="col-md-3 col-form-label">Name of Agency in Bangladesh</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Agency in Bangladesh" id="worker-name-of-agency-in-bangladesh"  value="{{ $worker->agency_in_bd or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-name-of-agency-in-foreign-country" class="col-md-3 col-form-label">Name of Agency in Foreign Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Agency in Foreign Country" id="worker-name-of-agency-in-foreign-country"  value="{{ $worker->agency_abroad or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-name-of-country" class="col-md-3 col-form-label">Name of Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name of Country" id="worker-name-of-country"  value="{{ $worker->agent or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-medical-report-copy" class="col-md-3 col-form-label">Medical Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Medical Report Copy" id="worker-medical-report-copy"  value="{{ $worker->medical_report or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-training-report-copy" class="col-md-3 col-form-label">Training Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Training Report Copy" id="worker-training-report-copy"  value="{{ $worker->training_report or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-finger-report-copy" class="col-md-3 col-form-label">Finger Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Finger Report Copy" id="worker-finger-report-copy"  value="{{ $worker->finger_report or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-man-power-report-copy" class="col-md-3 col-form-label">Man Power Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Man Power Report Copy" id="worker-man-power-report-copy"  value="{{ $worker->man_power_report or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-visa-number-visa-report-copy" class="col-md-3 col-form-label">Visa Number &amp; Visa Report Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Visa Number &amp; Visa Report Copy" id="worker-visa-number-visa-report-copy"  value="{{ $worker->visa_report or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-attestion-number-ticket" class="col-md-3 col-form-label">Attestion Number &amp; Ticket</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Attestion Number &amp; Ticket" id="worker-attestion-number-ticket"  value="{{ $worker->attestion_number_date or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-date-of-flight-ticket" class="col-md-3 col-form-label">Date of Flight &amp; Ticket</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Date of Flight &amp; Ticket" id="worker-date-of-flight-ticket"  value="{{ $worker->flight_date or '' }}">
				  </div>
				</div>



				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
			        <button type="submit" class="btn btn-success">Update</button>
			      </div>
			    </div>

			</form>

@endsection