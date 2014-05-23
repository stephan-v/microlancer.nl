@extends('layouts.master')

@section('content')
	<div class="container container-main">
		<div class="row">
			<div class="column-12 ">
				<section class="contest-header">
					<h2>Wedstrijd</h2>
				</section>
				<section class="contest-details">
					<h1>{{ $contest->title }}</h1>

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
				</section><!-- end .contest-details -->
			</div><!-- end .column-12 -->
		</div><!-- end .row -->
		<div class="row">
			<div class="column-12">
				<section class="contest-briefing">
					<p>{{ $contest->description }}</p>
				</section>
			</div><!-- end .column-12 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
@stop