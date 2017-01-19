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
			      <th scope="row">W0001</th>
			      <td>MARK</td>
			      <td>OTTO</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0002</th>
			      <td>JACOB</td>
			      <td>THORNTON</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0003</th>
			      <td>LARRY THE BIRD</td>
			      <td>LARRY THE BIRD</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0004</th>
			      <td>MARK</td>
			      <td>OTTO</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0005</th>
			      <td>JACOB</td>
			      <td>THORNTON</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0006</th>
			      <td>LARRY THE BIRD</td>
			      <td>LARRY THE BIRD</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0007</th>
			      <td>MARK</td>
			      <td>OTTO</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0008</th>
			      <td>JACOB</td>
			      <td>THORNTON</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0009</th>
			      <td>LARRY THE BIRD</td>
			      <td>LARRY THE BIRD</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0010</th>
			      <td>MARK</td>
			      <td>OTTO</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0011</th>
			      <td>JACOB</td>
			      <td>THORNTON</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0012</th>
			      <td>LARRY THE BIRD</td>
			      <td>LARRY THE BIRD</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0013</th>
			      <td>MARK</td>
			      <td>OTTO</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0014</th>
			      <td>JACOB</td>
			      <td>THORNTON</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">W0015</th>
			      <td>LARRY THE BIRD</td>
			      <td>LARRY THE BIRD</td>
			      <td>
			      	<a href="worker-view.php" class="btn btn-sm btn-info">View</a>
			      	<a href="worker-edit.php" class="btn btn-sm btn-warning">Edit</a>
			      </td>
			    </tr>
			  </tbody>
			</table>


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