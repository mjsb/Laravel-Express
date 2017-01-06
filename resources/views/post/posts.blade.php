@extends('template')

@section('titulo')

	Blog | Posts

@stop

@section('content')

	<h1> Posts </h1>

	@foreach( $posts as $post )

		<li>{{ $post }}</li>

	@endforeach

@stop