@extends('layouts.master')

@section('content')

			<div class="row">
				<div class="col-md-8">
					<h3>All Workers</h3>
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
		@if(count($workers))
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Name</th>
			      <th>Passport No.</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($workers as $worker)
			    <tr>
			      <th scope="row">{{ $worker->sid }}</th>
			      <td>{{ $worker->name }}</td>
			      <td>{{ $worker->passport_no }}</td>
			      <td>
			      	<a href="{{ url('/workers/'.$worker->sid) }}" class="btn btn-sm btn-info">View</a>
			      	<a href="{{ url('/workers/'.$worker->sid.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
			      	<!-- <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $worker->sid }}">Delete</a> -->
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		@endif

		{{ $workers->links() }}

		<form method="POST" id="delete-form" >
      		{{ csrf_field() }}
      		{{ method_field('DELETE') }}
		</form>

@endsection

@push('scripts_footer')
    <script src="{{ asset('js/delete.js')}}"></script>
@endpush