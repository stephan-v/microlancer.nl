@extends('layouts.master')

@section('content')

	<h1>Login</h1>

	{{ Form::open() }}
	
		<div class="form-group">
			{{ Form::label('email', 'Uw email:') }}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Wachtwoord:') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Log mij in!', ['class' => 'btn btn-primary']) }}
		</div>

		{{ $errors->first(null, "<div class='alert alert-danger'>:message</div>") }}

	{{ Form::close() }}
@stop