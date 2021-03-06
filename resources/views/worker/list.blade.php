@extends('layouts.master')

@section('content')

			<div class="row">
				<div class="col-md-6">
					<h3>All Workers</h3>
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
		@if(count($workers))
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Name</th>
			      <th>Passport No.</th>
			      <th>Status</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($workers as $worker)
			    <tr>
			      <th scope="row">{{ $worker->sid }}</th>
			      <td>{{ $worker->name }}</td>
			      <td>{{ $worker->passport_no }}</td>
			      <td>{{ $worker->status or ''}}</td>
			      <td>
			      	<a href="{{ url('/workers/'.$worker->sid) }}" class="btn btn-sm btn-info">View</a>
			      	<a href="{{ url('/workers/'.$worker->sid.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
			      	<!-- <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $worker->sid }}">Delete</a> -->
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		@else
			<p class="lead text-danger">No Records Found.</p>
		@endif

		{{ $workers->appends($_GET)->links() }}

		<form method="POST" id="delete-form" >
      		{{ csrf_field() }}
      		{{ method_field('DELETE') }}
		</form>

@endsection

@push('scripts_footer')
    <script src="{{ asset('js/delete.js')}}"></script>
@endpush