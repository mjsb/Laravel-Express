@extends('template')

@section('titulo')

	Blog | Novo Post

@stop

@section('content')

	<h1>Cadastra Novo Post</h1>	

	@if($errors->any())

		<ul class="alert">
			
			@foreach($errors->all() as $error)

				<li>{{ $error }}</li>

			@endforeach

		</ul>

	@endif

	{!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

		@include('admin.posts._form')

		<div class="form-group">
		
			{!! Form::label('tags', 'Tags', ['class' => 'control-label']) !!}
			{!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			
			{!! Form::submit('Cadastrar',  ['class'=>'btn btn-primary']) !!}

		</div>

	{!! Form::close() !!}	

@stop