@extends('layouts.master')

@section('content')
	<h1>Contests index</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Titel</th>
				<th>Categorie</th>
				<th>Budget</th>
				<th>Eigenaar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($contests as $contest)
				<tr>
					<td>{{ $contest->id }}</td>
					<td>{{ link_to_route('contests.show', $contest->title, $contest->id) }}</td>
					<td>{{ $contest->category }}</td>
					<td>{{ $contest->budget }}</td>
					<td>{{ $contest->user['email'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="btn-group">
		{{ link_to_route('contests.create', 'Maak een wedstrijd aan!', null, ['class' => 'btn btn-primary']) }}
	</div>

@stop