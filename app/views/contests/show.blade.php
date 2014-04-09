@extends('layouts.master')

@section('content')
	<h1>{{ $contest->title }}</h1>
	<p>{{ $contest->description }}</p>

	@if(Auth::check() and Auth::user()->id == $contest->user_id)

		<div class="btn-group">
			{{ link_to_route('contests.edit', 'Update this contest', $contest->id, ['class' => 'btn btn-primary']) }}
		</div>

		<div class="btn-group">	
			{{ Form::open(['route' => ['contests.destroy', $contest->id], 'method' => 'delete']) }}
				{{ Form::submit('Delete contest', ['class' => 'btn btn-danger']) }}
			{{ Form::close() }}
		</div>
	@endif
@stop