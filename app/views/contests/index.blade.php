@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="column-12">

				<h1>Ontwerpwedstrijden</h1>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Titel &#x25BC;</th>
							<th class="center">Categorie &#x25BC;</th>
							<th class="center">Budget &#x25BC;</th>
							<th class="center">Eigenaar &#x25BC;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($contests as $contest)
							<tr>
								<td>{{ link_to_route('contests.show', $contest->title, $contest->id) }}</td>
								<td class="center">{{ $contest->category }}</td>
								<td class="center">&#8364; {{ $contest->budget }}</td>
								<td class="center">{{ $contest->user['email'] }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<div class="btn-group">
					{{ link_to_route('contests.create', 'Maak een wedstrijd aan!', null, ['class' => 'btn btn-primary']) }}
				</div>

			</div><!-- end .column-12 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
@stop