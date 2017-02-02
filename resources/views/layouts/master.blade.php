<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name', 'MANPOWER AGENCY') }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker3.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

	<nav class="navbar navbar-inverse bg-primary">
		<div class="container-fluid">
			<a href="{{ url('/home') }}" class="navbar-brand"><h1>{{ config('app.name', 'MANPOWER AGENCY') }}</h1></a>
			<a href="{{ url('/home') }}"><span class="badge badge-warning float-right hidden-print">{{ session('totalNotification') }}</span></a>

		</div>
	</nav>
<div class="container-fluid">
	<br>
	<div class="row">
	
			<div class="col-md-3 hidden-print">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Workers</h4>
				</div>
				<div class="list-group list-group-flush">
					<a href="{{ url('/workers/new') }}" class="list-group-item list-group-item-action">New Worker</a>
					<a href="{{ url('/workers/new/input') }}" class="list-group-item list-group-item-action">New Worker Input</a>
					<a href="{{ url('/workers/new/report') }}" class="list-group-item list-group-item-action">Existing Worker</a>
					<a href="{{ url('/workers') }}" class="list-group-item list-group-item-action">View All Workers</a> 
				</div>
			</div>
			<br>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Agents</h4>
				</div>
				<div class="list-group list-group-flush">
					<a href="{{ url('/agents/new') }}" class="list-group-item list-group-item-action">New Agent</a>
					<a href="{{ url('/agents') }}" class="list-group-item list-group-item-action">View All Agents</a>
					<a href="{{ url('/agents/accounts/new') }}" class="list-group-item list-group-item-action">Agent Accounts</a>
					<a href="{{ url('/agents/accounts') }}" class="list-group-item list-group-item-action">View All Accounts</a>
				</div>
			</div>
				<br>
				<br>
				<form id="logout-form" action="{{ url('/logout') }}" method="POST">
					<input type="submit" value="Logout" class="btn btn-outline-danger btn-logout">
					{{ csrf_field() }}
				</form>
				<br>
				<br>

		</div>


		<div class="col-md-9">
			@yield('content')
		</div>




	</div>
</div>

<script src="{{ asset('js/jquery-3.1.1.js')}}"></script>
<script src="{{ asset('js/tether.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('js/script.js')}}"></script>
@stack('scripts_footer')

</body>
</html>