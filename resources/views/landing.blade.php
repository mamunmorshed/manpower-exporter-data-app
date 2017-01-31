@extends('layouts.master')

@section('content')

	<h2>Notifications</h2>
	@if($workers && count($workers))
        <ul class="list-group">
          <li class="list-group-item list-group-item-action active"><strong>Upcoming Flights</strong></li>
          @foreach($workers as $worker)
            <li class="list-group-item list-group-item-action @if($worker->flight_date=="today") list-group-item-success @endif">{{ $worker->name }} ({{ $worker->sid }}) has flight {{ $worker->flight_date }}.</li>
          @endforeach
        </ul>
    @endif
	<br>
	<br>
    @if($agents && count($agents))
        <ul class="list-group">
            <li class="list-group-item list-group-item-action active"><strong>Upcoming Agents Payments</strong></li>
            @foreach($agents as $agent)
                <li class="list-group-item list-group-item-action">{{ $agent->agentName }} ({{ $agent->agent }}) has a payment due for the flight of {{ $agent->name }} ({{ $agent->sid }})  on {{ $agent->flight_date }}.</li>
            @endforeach
        </ul>
    @endif

@endsection