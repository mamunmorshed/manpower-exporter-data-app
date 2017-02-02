@extends('layouts.master')

@section('content')

			<h3>New Agent</h3>
			<form method="post" enctype="multipart/form-data">
				<div class="form-group row">
				  <label for="agent-name" class="col-md-3 col-form-label">Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name" id="agent-name" name="name">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-father-name" class="col-md-3 col-form-label">Father Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Father Name" id="agent-father-name" name="father_name">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-nationality" class="col-md-3 col-form-label">Nationality</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Nationality" id="agent-nationality" name="nationality">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-dob" class="col-md-3 col-form-label">Date of Birth</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Date of Birth" id="agent-dob" name="dob">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-present-address" class="col-md-3 col-form-label">Present Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Present Address" id="agent-present-address" name="present_address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-permanent-address" class="col-md-3 col-form-label">Permanent Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Permanent Address" id="agent-permanent-address" name="permanent_address">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-mobile-number" class="col-md-3 col-form-label">Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Mobile No." id="agent-mobile-number" name="mobile">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-voter-id-number" class="col-md-3 col-form-label">Voter ID No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Voter ID No." id="agent-voter-id-number" name="voter_id">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-number" class="col-md-3 col-form-label">Passport No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport No." id="agent-passport-number" name="passport">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-issue-date" class="col-md-3 col-form-label">Passport Issue Date</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Passport Issue Date" id="agent-passport-issue-date" name="passport_issue">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-expiry-date" class="col-md-3 col-form-label">Passport Expiry Date</label>
				  <div class="col-md-9">
				    <input class="form-control datepicker-field" placeholder="Passport Expiry Date" id="agent-passport-expiry-date" name="passport_expiry">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-scan-copy" class="col-md-3 col-form-label">Passport Scan Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Passport Scan Copy" id="agent-passport-scan-copy" name="passport_scan">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-photo" class="col-md-3 col-form-label">Photo</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Photo" id="agent-photo" name="photo">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-email-id" class="col-md-3 col-form-label">Email ID</label>
				  <div class="col-md-9">
				    <input class="form-control" type="email" placeholder="Email ID" id="agent-email-id" name="email">
				  </div>
				</div>
				{{ csrf_field() }}
				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
			        <input type="submit" name="save" class="btn btn-success" value="Save">
			      </div>
			    </div>

			</form>

@endsection