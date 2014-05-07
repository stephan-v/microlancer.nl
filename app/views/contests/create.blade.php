@extends('layouts.master')

@section('content')

	<div class="container">

		@if(!Auth::check())
			<h1>Om een wedstrijd aan te maken moet u ingelogd zijn.</h1>
			<p>Klik hier om in te loggen of te registreren.</p>
				{{ link_to_route('users.login', 'inloggen', null, ['class' => 'btn btn-primary']) }}
				{{ link_to_route('users.create', 'registeren', null, ['class' => 'btn btn-primary']) }}
		@else
			<div class="form-container">
				<h1 class="center">Maak een wedstrijd aan.</h1>
				{{ Form::open(['route' => 'contests.store']) }}

						{{ Form::label('title', 'Wedstrijdtitel:') }}
						{{ Form::text('title', null, ['class' => 'form-control']) }}

						{{ Form::label('category', 'Categorie:') }}
						{{ Form::select('category', ['webdesign' => 'webdesign', 'logo design' => 'logo design', 'huisstijl' => 'huisstijl'], null, ['class' => 'form-control']) }}

						{{ Form::label('description', 'Omschrijving:') }}
						{{ Form::textarea('description', null, ['class' => 'form-control']) }}

						{{ Form::label('budget', 'Uw budget:') }}
						{{ Form::text('budget', null, ['class' => 'form-control']) }}


					{{ Form::submit('Maak mijn wedstrijd aan', ['class' => 'btn btn-primary']) }}

				{{ Form::close() }}
			</div><!-- end .form-container -->
		@endif

	</div><!-- end .container -->

@stop