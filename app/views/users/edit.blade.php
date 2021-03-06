@extends('layouts.master')

@section('content')
	<h1>Edit je account</h1>
	<p>Wijzig de gegevens van je account.</p>

	{{ Form::open(['route' => ['users.update', $email], 'method' => 'PUT']) }}
		<div class="form-group">
			{{ Form::label('email', 'Email:')}}
			{{ Form::text('email', $email, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password:')}}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
	
		{{ Form::submit('Update mijn account!', ['class' => 'btn btn-primary']) }}

	{{ Form::close() }}
@stop