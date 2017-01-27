@extends('layouts.master')

@section('content')
			<h3>New Worker</h3>
			<form method="POST" enctype='multipart/form-data'>
				<div class="form-group row">
				  <label for="worker-name" class="col-md-3 col-form-label">Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name" id="worker-name" name="name">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-husband-father-name" class="col-md-3 col-form-label">Husband / Father Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Husband / Father Name" id="worker-husband-father-name" name="husband_or_father">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-nationality" class="col-md-3 col-form-label">Nationality</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Nationality" id="worker-nationality" name="nationality">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-dob" class="col-md-3 col-form-label">Date of Birth</label>
				  <div class="col-md-9">
				    <input class="form-control" type="date" placeholder="Date of Birth" id="worker-dob" name="dob">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-present-address" class="col-md-3 col-form-label">Present Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Present Address" id="worker-present-address" name="present_address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-permanent-address" class="col-md-3 col-form-label">Permanent Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Permanent Address" id="worker-permanent-address" name="permanent_address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-mobile-number" class="col-md-3 col-form-label">Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Mobile No." id="worker-mobile-number" name="mobile_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-family-mobile-number" class="col-md-3 col-form-label">Family Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Family Mobile No." id="worker-family-mobile-number" name="family_mobile_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-voter-id-number" class="col-md-3 col-form-label">Voter ID No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Voter ID No." id="worker-voter-id-number" name="voter_id_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-number" class="col-md-3 col-form-label">Passport No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport No." id="worker-passport-number" name="passport_no">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-issue-date" class="col-md-3 col-form-label">Passport Issue Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="date" placeholder="Passport Issue Date" id="worker-passport-issue-date" name="passport_issue_date">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-expiry-date" class="col-md-3 col-form-label">Passport Expiry Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="date" placeholder="Passport Expiry Date" id="worker-passport-expiry-date" name="passport_expiry_date">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-passport-scan-copy" class="col-md-3 col-form-label">Passport Scan Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Passport Scan Copy" id="worker-passport-scan-copy" name="passport_scan_copy">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-pp-size-photo" class="col-md-3 col-form-label">P.P. Size Photo</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="P.P. Size Photo" id="worker-pp-size-photo" name="photo">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="worker-experience-time-country" class="col-md-3 col-form-label">Experience Time &amp; Country</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Experience Time &amp; Country" id="worker-experience-time-country" name="experience_details">
				  </div>
				</div>
				{{ csrf_field() }}
				{{ method_field('POST') }}
				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
				      <input type="submit" class="btn btn-success" value="Save">
			      </div>
			    </div>

			</form>

@endsection