@extends('layouts.master')

<!-- This dictates the background class for the body, to regulate per page patterns or images -->
@section('background', 'register-bg')

@section('content')

	<div class="container">
		<div class="form-container">
			<h1 class="center">Maak een account aan</h1>

			{{ Form::open(['route' => 'users.store']) }}
				{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
				{{ $errors->first('email', "<div class='alert alert-danger'>:message</div>") }}

				{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Wachtwoord']) }}
				{{ $errors->first('password', "<div class='alert alert-danger'>:message</div>") }}
			
				{{ Form::submit('Registreer', ['class' => 'btn btn-succes']) }}

			{{ Form::close() }}
		</div><!-- end .form-container -->
	</div><!-- end .container -->

@stop