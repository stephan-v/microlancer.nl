@extends('layouts.master')

<!-- This dictates the background class for the body, to regulate per page patterns or images -->
@section('background', 'login-bg')

@section('content')

	<div class="container">
		<div class="form-container">
			<h1 class="center">Inloggen op Microlancer</h1>

			{{ Form::open() }}
			
				
					{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
				

				
					{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Wachtwoord']) }}
				

				<div class="right">
					<p>Wachtwoord vergeten?</p>
				</div>

				{{ $errors->first(null, "<div class='alert alert-danger'>:message</div>") }}

				<div class="form-group">
					{{ Form::submit('login', ['class' => 'btn btn-succes']) }}
				</div>

				<div class="left">
					<p>Geen account? Schrijf je in</p>
				</div>

			{{ Form::close() }}
		</div><!-- end .form-container -->
	</div><!-- end .container -->

@stop