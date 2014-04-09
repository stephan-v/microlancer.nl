@extends('layouts.master')

@section('content')

	@if(!Auth::check())
		<h1>Om een wedstrijd aan te maken moet u ingelogd zijn.</h1>
		<p>Klik hier om in te loggen of te registreren.</p>
		<div class="btn-group">
			{{ link_to_route('users.login', 'inloggen', null, ['class' => 'btn btn-primary']) }}
		</div>
		<div class="btn-group">
			{{ link_to_route('users.create', 'registeren', null, ['class' => 'btn btn-primary']) }}
		</div>
	@else
		{{ Form::open(['route' => 'contests.store']) }}
			<div class="form-group">
				{{ Form::label('title', 'Wedstrijdtitel:') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('category', 'Categorie:') }}
				{{ Form::select('category', ['webdesign' => 'webdesign', 'logo design' => 'logo design', 'huisstijl' => 'huisstijl'], null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('description', 'Omschrijving:') }}
				{{ Form::textarea('description', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('budget', 'Uw budget:') }}
				{{ Form::text('budget', null, ['class' => 'form-control']) }}
			</div>

			{{ Form::submit('Maak aan!', ['class' => 'btn btn-primary']) }}

		{{ Form::close() }}
	@endif

@stop