@extends('layouts.master')

@section('content')
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
@stop