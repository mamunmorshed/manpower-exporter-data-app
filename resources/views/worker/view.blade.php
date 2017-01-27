@extends('layouts.master')

@section('content')

			<h3>View Worker</h3>
			<table class="table table-bordered">
				
				@if($worker->sid)
				<tr><td>Worker ID</td><td>{{ $worker->sid }}</td></tr>
				@endif

				@if($worker->agent)
				<tr><td>Agent ID</td><td>{{ $worker->agent }}</td></tr>
				@endif

				@if($worker->name)
				<tr><td>Name</td><td>{{ $worker->name }}</td></tr>
				@endif

				@if($worker->husband_or_father)
				<tr><td>Husband / Father Name</td><td>{{ $worker->husband_or_father }}</td></tr>
				@endif

				@if($worker->nationality)
				<tr><td>Nationality</td><td>{{ $worker->nationality}}</td></tr>
				@endif

				@if($worker->dob)
				<tr><td>Date of Birth</td><td>{{ $worker->dob }}</td></tr>
				@endif

				@if($worker->present_address)
				<tr><td>Present Address</td><td>{{ $worker->present_address }}</td></tr>
				@endif

				@if($worker->permanent_address)
				<tr><td>Permanent Address</td><td>{{ $worker->permanent_address }}</td></tr>
				@endif

				@if($worker->mobile_no)
				<tr><td>Mobile No.</td><td>{{ $worker->mobile_no }}</td></tr>
				@endif

				@if($worker->family_mobile_no)
				<tr><td>Family Mobile No.</td><td>{{ $worker->family_mobile_no }}</td></tr>
				@endif

				@if($worker->voter_id_no)
				<tr><td>Voter ID No.</td><td>{{ $worker->voter_id_no }}</td></tr>
				@endif

				@if($worker->passport_no)
				<tr><td>Passport No.</td><td>{{ $worker->passport_no }}</td></tr>
				@endif

				@if($worker->passport_issue_date)
				<tr><td>Passport Issue Date</td><td>{{ $worker->passport_issue_date }}</td></tr>
				@endif

				@if($worker->passport_expiry_date)
				<tr><td>Passport Expiry Date</td><td>{{ $worker->passport_expiry_date }}</td></tr>
				@endif

				@if($worker->passport_scan_copy)
				<tr><td>Passport Scan Copy</td><td><a href="{{ Storage::url($worker->passport_scan_copy) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->photo)
				<tr><td>P.P. Size Photo</td><td><a href="{{ Storage::url($worker->photo) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->experience_details)
				<tr><td>Experience Time &amp; Country</td><td>{{ $worker->experience_details }}</td></tr>
				@endif

				@if($worker->commission)
				<tr><td>Commission</td><td>{{ $worker->commission }}</td></tr>
				@endif

				@if($worker->agency_in_bd)
				<tr><td>Name of Agency in Bangladesh</td><td>{{ $worker->agency_in_bd }}</td></tr>
				@endif

				@if($worker->agency_abroad)
				<tr><td>Name of Agency in Foreign Country</td><td>{{ $worker->agency_abroad }}</td></tr>
				@endif

				@if($worker->country)
				<tr><td>Name of Country</td><td>{{ $worker->country }}</td></tr>
				@endif

				@if($worker->medical_report)
				<tr><td>Medical Report Copy</td><td><a href="{{ Storage::url($worker->medical_report) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->training_report)
				<tr><td>Training Report Copy</td><td><a href="{{ Storage::url($worker->training_report) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->visa_report)
				<tr><td>Visa Copy</td><td><a href="{{ Storage::url($worker->visa_report) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->attestion)
				<tr><td>Attestion Copy</td><td><a href="{{ Storage::url($worker->attestion) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->finger_report)
				<tr><td>Finger Report Copy</td><td><a href="{{ Storage::url($worker->finger_report) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->man_power_report)
				<tr><td>Man Power Report Copy</td><td><a href="{{ Storage::url($worker->man_power_report) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->ticket)
				<tr><td>Flight &amp; Ticket Copy</td><td><a href="{{ Storage::url($worker->ticket) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->other_uploads)
				<tr><td>Other Uploads</td><td><a href="{{ Storage::url($worker->other_uploads) }}" target="_blank">VIEW</a></td></tr>
				@endif

				@if($worker->flight_date)
				<tr><td>Date of Flight</td><td>{{ $worker->flight_date }}</td></tr>
				@endif

			</table>
	    	<a href="{{ $edit_url }}" class="btn btn-success float-right">Edit Worker</a>
	    	<a href="#" class="btn btn-success">Print Worker Copy</a> 
	    	<a href="#" class="btn btn-success">Print Office Copy</a>

@endsection