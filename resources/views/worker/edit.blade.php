@extends('layouts.master')

@section('content')

			<h3>Edit Worker</h3>

			<form method="post" action="worker-view.php">

				<div class="form-group row">
				  <label for="worker-agent-id" class="col-md-3 col-form-label">Agent ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Agent ID" id="worker-agent-id">
				  </div>
				</div>
				
				
				<div class="form-group row">
				  <label for="worker-name" class="col-md-3 col-form-label">Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name" id="worker-name">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-husband-father-name" class="col-md-3 col-form-label">Husband / Father Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Husband / Father Name" id="worker-husband-father-name">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-nationality" class="col-md-3 col-form-label">Nationality</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Nationality" id="worker-nationality">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-dob" class="col-md-3 col-form-label">Date of Birth</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Date of Birth" id="worker-dob">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-present-address" class="col-md-3 col-form-label">Present Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Present Address" id="worker-present-address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-permanent-address" class="col-md-3 col-form-label">Permanent Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Permanent Address" id="worker-permanent-address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-mobile-number" class="col-md-3 col-form-label">Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Mobile No." id="worker-mobile-number">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-family-mobile-number" class="col-md-3 col-form-label">Family Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Family Mobile No." id="worker-family-mobile-number">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-voter-id-number" class="col-md-3 col-form-label">Voter ID No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Voter ID No." id="worker-voter-id-number">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-number" class="col-md-3 col-form-label">Passport No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport No." id="worker-passport-number">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-issue-date" class="col-md-3 col-form-label">Passport Issue Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport Issue Date" id="worker-passport-issue-date">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-scan-copy" class="col-md-3 col-form-label">Passport Scan Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Passport Scan Copy" id="worker-passport-scan-copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-pp-size-photo" class="col-md-3 col-form-label">P.P. Size Photo</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="P.P. Size Photo" id="worker-pp-size-photo">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-experience-time-country" class="col-md-3 col-form-label">Experience Time &amp; Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Experience Time &amp; Country" id="worker-experience-time-country">
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
			        <button type="submit" class="btn btn-success">Update</button>
			      </div>
			    </div>

			</form>

@endsection