@extends('layouts.master')

@section('content')

			<h3>View Agent</h3>
			
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>Name</td>
						<td>RUBEL HOSSAIN</td>
					</tr>
					<tr>
						<td>Father Name</td>
						<td>ALAUDDIN KHAN</td>
					</tr>
					<tr>
						<td>Nationality</td>
						<td>BANGLADESHI</td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td>29 NOVEMBER, 1992</td>
					</tr>
					<tr>
						<td>Present Address</td>
						<td>KASHIPUR HATHKHOLA, FATULLAH, NARAYANGAJ</td>
					</tr>
					<tr>
						<td>Permanent Address</td>
						<td>KASHIPUR HATHKHOLA, FATULLAH, NARAYANGAJ</td>
					</tr>
					<tr>
						<td>Mobile No.</td>
						<td>01670499500</td>
					</tr>
					<tr>
						<td>Voter ID No.</td>
						<td>199200087459852</td>
					</tr>
					<tr>
						<td>Passport No.</td>
						<td>9994663118745520</td>
					</tr>
					<tr>
						<td>Passport Issue Date</td>
						<td>29 NOVEMBER, 2016</td>
					</tr>
					<tr>
						<td>Passport Scan Copy</td>
						<td><a href="img/pp-size-photo.png" target="_blank">VIEW</a></td>
					</tr>
					<tr>
						<td>Email ID</td>
						<td>MYMAIL@EMAIL.COM</td>
					</tr>
				</tbody>
			</table>

	    	<a href="#" class="btn btn-success">Print</a>
	    	<a href="worker-list.php" class="btn btn-success">View Workers</a>
	    	<a href="agent-edit.php" class="btn btn-success float-right">Edit Agent</a>

@endsection