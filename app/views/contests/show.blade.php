@extends('layouts.master')

@section('content')
	<h1>{{ $contest->title }}</h1>
	<p>{{ $contest->description }}</p>
@stop