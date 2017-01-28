@extends('layouts.master')

@section('content')

			<h3>View Agent</h3>
			
			<table class="table table-bordered">
				<tbody>
					
					@if($agent->sid)
					<tr><td>Agent ID</td><td>{{ $agent->sid }}</td></tr>
					@endif

					@if($agent->name)
					<tr><td>Name</td><td>{{ $agent->name }}</td></tr>
					@endif
					
					@if($agent->father_name)					
					<tr><td>Father Name</td><td>{{ $agent->father_name }}</td></tr>
					@endif

					@if($agent->nationality)
					<tr><td>Nationality</td><td>{{ $agent->nationality }}</td></tr>
					@endif

					@if($agent->dob)
					<tr><td>Date of Birth</td><td>{{ $agent->dob }}</td></tr>
					@endif

					@if($agent->present_address)
					<tr><td>Present Address</td><td>{{ $agent->present_address }}</td></tr>
					@endif

					@if($agent->permanent_address)
					<tr><td>Permanent Address</td><td>{{ $agent->permanent_address }}</td></tr>
					@endif

					@if($agent->mobile)
					<tr><td>Mobile No.</td><td>{{ $agent->mobile }}</td></tr>
					@endif

					@if($agent->voter_id)
					<tr><td>Voter ID No.</td><td>{{ $agent->voter_id }}</td></tr>
					@endif

					@if($agent->passport)
					<tr><td>Passport No.</td><td>{{ $agent->passport }}</td></tr>
					@endif

					@if($agent->passport_issue)
					<tr><td>Passport Issue Date</td><td>{{ $agent->passport_issue }}</td></tr>
					@endif

					@if($agent->passport_expiry)
					<tr><td>Passport Expiry Date</td><td>{{ $agent->passport_expiry }}</td></tr>
					@endif

					@if($agent->passport_scan)
					<tr><td>Passport Scan Copy</td><td><a href="{{ Storage::url($agent->passport_scan) }}" target="_blank">VIEW</a></td></tr>
					@endif

					@if($agent->photo)
					<tr><td>Photo</td><td><a href="{{ Storage::url($agent->photo) }}" target="_blank">VIEW</a></td></tr>
					@endif

					@if($agent->email)
					<tr><td>Email ID</td><td>{{ $agent->email }}</td></tr>
					@endif

				</tbody>
			</table>

	    	<a href="#" class="btn btn-success">Print</a>
	    	<a href="worker-list.php" class="btn btn-success">View Workers</a>
	    	<a href="{{ $edit_url }}" class="btn btn-success float-right">Edit Agent</a>

@endsection