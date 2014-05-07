@extends('layouts.master')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="column-12">
				<h1>User Profile</h1>
				<ul class="list-group">
					<li class="list-group-item">
						ID: {{ $user->id }}
					</li>
					<li class="list-group-item">
						Email: {{ $user->email }}
					</li>
					<li class="list-group-item">
						Password: {{ $user->password }}
					</li>
				</ul>

				<!-- Check if user is logged in AND has the same id as the userprofile -->
				@if(Auth::check() and Auth::user()->id == $user->id )
					<p>You have the same id, therefore you have access.</p>	

					<div class="btn-group">
						{{ link_to_route('users.edit', 'Edit account', $user->email, ['class' => 'btn btn-primary']) }}
					</div>

					<div class="btn-group">
						{{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
							{{ Form::submit('Delete account', ['class' => 'btn btn-danger']) }}
						{{ Form::close() }}
					</div>
				@endif
			</div><!-- end .column-12 -->
		</div><!-- end .row -->
	</div><!-- end .container -->

@stop