@extends('layouts.master')

@section('content')

			<div class="row">
				<div class="col-md-8">
					<h3>All Agents</h3>
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

			@if(count($agents))
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Name</th>
				      <th>Mobile</th>
				      <th>Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  @foreach($agents as $agent)
				    <tr>
				      <th scope="row">{{ $agent->sid }}</th>
				      <td>{{ $agent->name }}</td>
				      <td>{{ $agent->mobile }}</td>
				      <td>
				      	<a href="{{ url('/agents/'.$agent->sid) }}" class="btn btn-sm btn-info">View</a>
				      	<a href="{{ url('/agents/'.$agent->sid.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
				      	<a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $agent->sid }}">Delete</a>
				      	<a href="{{ url('/workers/') }}" class="btn btn-sm btn-success">Workers</a>
				      </td>
				    </tr>
				    <tr>
				   @endforeach
				  </tbody>
				</table>
			@endif

		{{ $agents->links() }}

		<form method="POST" id="delete-form" >
      		{{ csrf_field() }}
      		{{ method_field('DELETE') }}
		</form>

@endsection