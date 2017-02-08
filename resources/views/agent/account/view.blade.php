@extends('layouts.master')

@section('content')

			<h3 class="hidden-print">View Agent Accounts</h3>
			<table class="table table-bordered">


				<tr>
					<td colspan="2">Agent ID</td>
					<td colspan="2">{{ $account->agent }}</td>
				</tr>
				<tr>
					<td colspan="2">Agent Name</td>
					<td colspan="2">{{ $account->accountAgent->name }}</td>
				</tr>
				<tr>
					<td colspan="2">Commission</td>
					<td colspan="2">{{ $account->commission }}</td>
				</tr>
				<tr>
					<td colspan="4"><strong>Compensation:</strong></td>
				</tr>
				<tr>
					<td>{{ $account->compensation_amount }}</td>
					<td>{{ $account->compensation_date }}</td>
					<td>{{ $account->compensation_reference }}</td>
					<td>{{ $account->compensation_remarks }}</td>
				</tr>
				<tr>
					<td colspan="4"><strong>Advance:</strong></td>
				</tr>
				<tr>
					<td>{{ $account->advance_amount }}</td>
					<td>{{ $account->advance_date }}</td>
					<td>{{ $account->advance_reference }}</td>
					<td>{{ $account->advance_remarks }}</td>
				</tr>
				<tr>
					<td colspan="2">Due Amount</td>
					<td colspan="2">{{ $account->due_amount }}</td>
				</tr>
			</table>

            <table class="table table-borderless text-center visible-print-block print-full-width">
                <tr>
                    <td colspan="3"><br>
                        <br>
                        <br></td>
                </tr>
                <tr>
                    <td><hr><strong>Approval Sign</strong></td>
                    <td><hr><strong>Accountant Sign</strong></td>
                    <td><hr><strong>Receiver Sign</strong></td>
                </tr>
            </table>
			<!-- <a href="agent-commission-edit.php" class="btn btn-success float-right">Edit Agents Accounts</a> -->
			<a href="#" class="btn btn-success hidden-print print" data-printarea="full">Print</a>

@endsection








