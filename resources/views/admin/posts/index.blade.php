@extends('template')

@section('titulo')

	Blog | Admin

@stop

@section('content')

	<h1>Blog Admin</h1>	

	<a href="{{ route('admin.posts.create') }}" class="btn btn-primary pull-right">Cadastrar novo post</a>

	<br />
	<br />

	<table class="table">
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Ação</th>
		</tr>

		@foreach($posts as $post)

			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>
					<a href="{{ route('admin.posts.edit', ['id'=>$post->id]) }}" class="btn btn-success">Editar</a>
					<a href="{{ route('admin.posts.destroy', ['id'=>$post->id]) }}" class="btn btn-danger">Excluir</a>
				</td>
			</tr>

		@endforeach

	</table>

	{!! $posts->render() !!}

@stop