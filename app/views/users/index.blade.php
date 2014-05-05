@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="column-12">
				<h1>Alle geregistreerde gebruikers</h1>
				<ul class="list-group">
					@foreach($users as $user)
						<li class="list-group-item">
							{{ link_to_route('users.show', $user->email, $user->email) }}
						</li>
					@endforeach
				</ul>
			</div><!-- end .column-12 -->
		</div>
	</div><!-- end .container -->
@stop