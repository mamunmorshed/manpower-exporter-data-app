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

			<div class="row">
				<div class="col">
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
					    <tr>
					      <th scope="row">A001</th>
					      <td>MARK</td>
					      <td>OTTO</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A002</th>
					      <td>JACOB</td>
					      <td>THORNTON</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A003</th>
					      <td>LARRY THE BIRD</td>
					      <td>LARRY THE BIRD</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A004</th>
					      <td>MARK</td>
					      <td>OTTO</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A005</th>
					      <td>JACOB</td>
					      <td>THORNTON</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A006</th>
					      <td>LARRY THE BIRD</td>
					      <td>LARRY THE BIRD</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A007</th>
					      <td>MARK</td>
					      <td>OTTO</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A008</th>
					      <td>JACOB</td>
					      <td>THORNTON</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A009</th>
					      <td>LARRY THE BIRD</td>
					      <td>LARRY THE BIRD</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A010</th>
					      <td>MARK</td>
					      <td>OTTO</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A011</th>
					      <td>JACOB</td>
					      <td>THORNTON</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A012</th>
					      <td>LARRY THE BIRD</td>
					      <td>LARRY THE BIRD</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A013</th>
					      <td>MARK</td>
					      <td>OTTO</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A014</th>
					      <td>JACOB</td>
					      <td>THORNTON</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">A015</th>
					      <td>LARRY THE BIRD</td>
					      <td>LARRY THE BIRD</td>
					      <td>
					      	<a href="agent-view.php" class="btn btn-sm btn-info">View</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-warning">Edit</a>
					      	<a href="agent-edit.php" class="btn btn-sm btn-danger">Delete</a>
					      	<a href="worker-list.php" class="btn btn-sm btn-success">Workers</a>
					      </td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		
			<br>

			<div class="row">
				<div class="col">
					
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

				</div>
			</div>

@endsection