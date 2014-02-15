@extends('layouts.master')

@section('content')
	<h1>Main index</h1>
	<div class="jumbotron">
		<h1>Welkom op de indexpagina</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, culpa, magni dolorem magnam est ipsum soluta nisi eos. Voluptates mollitia obcaecati minima est itaque in magnam eum? Quia, maiores, accusamus.</p>
	</div>
	{{ link_to_route('users.index', 'Bekijk alle gebruikers') }}
@stop