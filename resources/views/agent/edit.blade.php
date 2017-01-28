@extends('layouts.master')

@section('content')

			<h3>Edit Agent</h3>
			<form method="post" enctype="multipart/form-data">

			    <input type="hidden" value="{{ $agent->sid }}" name="sid">
				<div class="form-group row">
				  <label for="agent-name" class="col-md-3 col-form-label">Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Name" id="agent-name" name="name" value="{{ $agent->name or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-father-name" class="col-md-3 col-form-label">Father Name</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Father Name" id="agent-father-name" name="father_name" value="{{ $agent->father_name or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-nationality" class="col-md-3 col-form-label">Nationality</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Nationality" id="agent-nationality" name="nationality" value="{{ $agent->nationality or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-dob" class="col-md-3 col-form-label">Date of Birth</label>
				  <div class="col-md-9">
				    <input class="form-control" type="date" placeholder="Date of Birth" id="agent-dob" name="dob" value="{{ $agent->dob or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-present-address" class="col-md-3 col-form-label">Present Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Present Address" id="agent-present-address" name="present_address" value="{{ $agent->present_address or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-permanent-address" class="col-md-3 col-form-label">Permanent Address</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Permanent Address" id="agent-permanent-address" name="permanent_address" value="{{ $agent->permanent_address or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-mobile-number" class="col-md-3 col-form-label">Mobile No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Mobile No." id="agent-mobile-number" name="mobile" value="{{ $agent->mobile or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-voter-id-number" class="col-md-3 col-form-label">Voter ID No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Voter ID No." id="agent-voter-id-number" name="voter_id" value="{{ $agent->voter_id or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-number" class="col-md-3 col-form-label">Passport No.</label>
				  <div class="col-md-9">
				    <input class="form-control" type="text" placeholder="Passport No." id="agent-passport-number" name="passport" value="{{ $agent->passport or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-issue-date" class="col-md-3 col-form-label">Passport Issue Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="date" placeholder="Passport Issue Date" id="agent-passport-issue-date" name="passport_issue" value="{{ $agent->passport_issue or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-expiry-date" class="col-md-3 col-form-label">Passport Expiry Date</label>
				  <div class="col-md-9">
				    <input class="form-control" type="date" placeholder="Passport Expiry Date" id="agent-passport-expiry-date" name="passport_expiry" value="{{ $agent->passport_expiry or '' }}">
				  </div>
				</div>

				<div class="form-group row">
				  <label for="agent-passport-scan-copy" class="col-md-3 col-form-label">Passport Scan Copy</label>
				  <div class="col-md-9">
				    <input class="form-control" type="file" placeholder="Passport Scan Copy" id="agent-passport-scan-copy" name="passport_scan" >
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
				    <input class="form-control" type="email" placeholder="Email ID" id="agent-email-id" name="email" value="{{ $agent->email or '' }}">
				  </div>
				</div>
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="form-group row">
			      <div class="offset-sm-3 col-sm-9">
			        <input type="submit" name="save" class="btn btn-success" value="Save">
			      </div>
			    </div>

			</form>

@endsection