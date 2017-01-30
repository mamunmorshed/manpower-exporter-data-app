@extends('layouts.master')

@section('content')

			<div class="row">
				<div class="col-md-8">
					<h3>All Transactions</h3>
				</div>
				<div class="col-md-4">
					<div class="input-group">
				      <input type="text" class="form-control" placeholder="Search for...">
				      <span class="input-group-btn">
				        <button class="btn btn-secondary" type="button">Go!</button>
				      </span>
				    </div>
				</div>
			</div>
			
			<br>
			@if($accounts)
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Date</th>
					      <th>Agent ID</th>
					      <th>Commission</th>
					      <th>Compensation</th>
					      <th>Advance</th>
					      <th>Due</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <tbody>
				@foreach($accounts as $account)
					    <tr>
					      <td>{{ $account->created_at->format('d/m/Y') }}</td>
					      <td>{{ $account->agent }}</td>
					      <td>{{ $account->commission }}</td>
					      <td>{{ $account->compensation_amount }}</td>
					      <td>{{ $account->advance_amount }}</td>
					      <td>{{ $account->due_amount }}</td>
					      <td>
					      	<a href="{{ url('/agents/accounts/'.$account->id.'/view') }}" class="btn btn-sm btn-info">View</a>
					      	<!-- <a href="{{ url('/agents/accounts/'.$account->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a> -->
					      	<!-- <a href="#" class="btn btn-sm btn-success">Print</a> -->
					      </td>
					    </tr>
				@endforeach
					    
					  </tbody>
					</table>

			@endif

		{{ $accounts->links() }}


@endsection