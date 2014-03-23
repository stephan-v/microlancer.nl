@extends('layouts.master')

@section('content')
	<h1>Single Index View</h1>
	<ul class="list-group">
		<li class="list-group-item">
			ID: {{ $user->id }}
		</li>
		<li class="list-group-item">
			Email: {{ $user->email }}
		</li>
		<li class="list-group-item">
			Password: {{ $user->password }}
		</li>
	</ul>

	<div class="btn-group">
		{{ link_to_route('users.edit', 'Edit account', $user->email, ['class' => 'btn btn-primary']) }}
	</div>

	<div class="btn-group">
		{{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
			{{ Form::submit('Delete account', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}
	</div>
@stop