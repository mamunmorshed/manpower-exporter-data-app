@extends('layouts.master')

@section('content')

			<div class="row hidden-print">
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
			@if(isset($agent))
                <br>
				<p class="display-title">{{ $agent->name }} ({{ $agent->sid }})</p>
			@endif
			<br>
			@if(count($accounts))
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Date</th>
					      <th>Commission</th>
					      <th>Reference</th>
					      <th>Compensation</th>
					      <th>Reference</th>
					      <th>Advance</th>
					      <th>Reference</th>
					      <th>Due</th>
					      <th class="hidden-print">Action</th>
					    </tr>
					  </thead>
					  <tbody>
				@foreach($accounts as $account)
					    <tr>
					      <td>{{ $account->created_at->format('d/m/Y') }}</td>
					      <td>{{ $account->commission }}</td>
					      <td>{{ $account->commission_reference }}</td>
					      <td>{{ $account->compensation_amount }}</td>
					      <td>{{ $account->compensation_reference }}</td>
					      <td>{{ $account->advance_amount }}</td>
					      <td>{{ $account->advance_reference }}</td>
					      <td>{{ $account->due_amount }}</td>
					      <td class="hidden-print">
					      	<a href="{{ url('/agents/accounts/'.$account->id.'/view') }}" class="btn btn-sm btn-info">View</a>
					      	<!-- <a href="{{ url('/agents/accounts/'.$account->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a> -->
					      	<!-- <a href="#" class="btn btn-sm btn-success">Print</a> -->
					      </td>
					    </tr>
				@endforeach
					    
					  </tbody>
					</table>
                    <a href="#" class="btn btn-success hidden-print print float-right" data-printarea="full">Print</a>
            @else
				<p class="lead text-danger">No Records Found.</p>
			@endif

		<div class="hidden-print">
            {{ $accounts->appends($_GET)->links() }}
        </div>


@endsection