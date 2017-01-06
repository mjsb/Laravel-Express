@extends('template')

@section('titulo')

	Blog | Home

@stop
@section('content')

	<h1>Blog</h1>

	@foreach($posts as $post)

		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>

		@if(count($post->tags) > 0)
			<b>Tags:</b><br>
			<ul>
				@foreach($post->tags as $tag)
					<li>{{ $tag->name }}</li>
				@endforeach
			</ul>
		@endif

		@if(count($post->comments) > 0)

			<h3>Comentários</h3>

			@foreach($post->comments as $comment)

				<b>Nome: </b> {{ $comment->name }}<br>
				<b>Comentário: </b> {{ $comment->comment }}<br>
				<hr>

			@endforeach

		@endif

		<hr>

	@endforeach

@stop

