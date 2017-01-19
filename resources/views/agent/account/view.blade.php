@extends('layouts.master')

@section('content')

			<h3>View Agent Accounts</h3>
			<table class="table table-bordered">


				<tr>
					<td colspan="2">Agent ID</td>
					<td colspan="2">A006</td>
				</tr>
				<tr>
					<td colspan="2">Commission</td>
					<td colspan="2">99654</td>
				</tr>
				<tr>
					<td colspan="4"><strong>Compensation:</strong></td>
				</tr>
				<tr>
					<td>2000</td>
					<td>29 FEBRUARY, 2017</td>
					<td>W0518</td>
					<td>SAMPLE REMARKS</td>
				</tr>
				<tr>
					<td colspan="4"><strong>Advance:</strong></td>
				</tr>
				<tr>
					<td>2000</td>
					<td>29 FEBRUARY, 2017</td>
					<td>W0518</td>
					<td>SAMPLE REMARKS</td>
				</tr>
				<tr>
					<td colspan="2">Due Amount</td>
					<td colspan="2">15644</td>
				</tr>
			</table>
			<a href="agent-commission-edit.php" class="btn btn-success float-right">Edit Agents Accounts</a>
			<a href="#" class="btn btn-success">Print</a>

@endsection