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
			      	<a href="#" class="btn btn-sm btn-danger">Delete</a>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		@endif

			<nav aria-label="Page navigation example">
			  <ul class="pagination ">
			    <li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1">Previous</a>
			    </li>
			    <li class="page-item active">
			      <span class="page-link">
			        1
			        <span class="sr-only">(current)</span>
			      </span>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>
@endsection