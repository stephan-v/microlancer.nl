@extends('layouts.master')

@section('content')

	{{ Form::open(['route' => 'contests.update']) }}
		<div class="form-group">
			{{ Form::label('title', 'Wedstrijdtitel:') }}
			{{ Form::text('title', $contest->title, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('category', 'Categorie:') }}
			{{ Form::select('category', ['webdesign' => 'webdesign', 'logo design' => 'logo design', 'huisstijl' => 'huisstijl'], $contest->category, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('description', 'Omschrijving:') }}
			{{ Form::textarea('description', $contest->description, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('budget', 'Uw budget:') }}
			{{ Form::text('budget', $contest->budget, ['class' => 'form-control']) }}
		</div>

		{{ Form::submit('Update!', ['class' => 'btn btn-primary']) }}

	{{ Form::close() }}

@stop