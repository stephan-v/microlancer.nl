@extends('layouts.master')

@section('content')
	<h1>Users main index</h1>
	<ul class="list-group">
		@foreach($users as $user)
			<li class="list-group-item">
				{{ link_to_route('users.show', $user->email, $user->email) }}
			</li>
		@endforeach
	</ul>
@stop