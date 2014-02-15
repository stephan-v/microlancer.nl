@extends('layouts.master')

@section('content')
	<h1>Maak een account aan</h1>
	<p>Maak hier een account aan.</p>

	{{ Form::open(['route' => 'users.store']) }}
		<div class="form-group">
			{{ Form::label('email', 'Email:')}}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password:')}}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
	
		{{ Form::submit('Maak mijn account aan!') }}

	{{ Form::close() }}
@stop