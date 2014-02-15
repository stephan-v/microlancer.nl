@extends('layouts.master')

@section('content')
	<h1>Edit je account</h1>
	<p>Wijzig de gegevens van je account.</p>

	{{ Form::open(['route' => 'users.update', 'method' => 'PUT']) }}
		<div class="form-group">
			{{ Form::label('email', 'Email:')}}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password:')}}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
	
		{{ Form::submit('Update mijn account!') }}

	{{ Form::close() }}
@stop