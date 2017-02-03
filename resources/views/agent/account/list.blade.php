@extends('layouts.master')

@section('content')

			<div class="row">
				<div class="col-md-6">
					<h3>All Transactions</h3>
				</div>
				<div class="col-md-6">
					<form>
						<div class="input-group">
							<input class="form-control datepicker-field"  placeholder="From" name="from" value="{{ $from or '' }}">
							<input class="form-control datepicker-field"  placeholder="To" name="to" value="{{ $to or '' }}">
						  <input type="text" class="form-control" placeholder="Search for..." name="s" value="{{ $s or '' }}">
						  <span class="input-group-btn">
							<button class="btn btn-secondary" type="submit">Go!</button>
						  </span>
						</div>
					</form>
				</div>
			</div>
			
			<br>
			@if(count($accounts))
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
            @else
				<p class="lead text-danger">No Records Found.</p>
			@endif

		{{ $accounts->appends($_GET)->links() }}


@endsection