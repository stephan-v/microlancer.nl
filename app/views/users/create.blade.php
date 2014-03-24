@extends('layouts.master')

@section('content')
	<h1>Maak een account aan</h1>
	<p>Maak hier een account aan.</p>

	{{ Form::open(['route' => 'users.store']) }}
		<div class="form-group">
			{{ Form::label('email', 'Email:')}}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
			{{ $errors->first('email', "<div class='btn btn-danger'>:message</div>") }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password:')}}
			{{ Form::password('password', ['class' => 'form-control']) }}
			{{ $errors->first('password', "<div class='btn btn-danger'>:message</div>") }}
		</div>
	
		{{ Form::submit('Maak mijn account aan!', ['class' => 'btn btn-primary']) }}

	{{ Form::close() }}
@stop