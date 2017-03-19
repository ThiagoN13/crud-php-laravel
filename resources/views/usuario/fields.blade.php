@extends('template')

@section('content')
<head>
	<title>Crud Laravel</title>
	 <head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
	<h1>Editar informações</h1>
	<form method="post" action="{{url('/update')}}">
		 @foreach($user as $value)
		<div class="row">
			<div class="form-group col-xs-5">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" class="form-control" value="{{$value->nome}}">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-5">
				<label for="email">E-mail:</label>
				<input type="text" name="email" id="email" class="form-control" value="{{$value->email}}">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-5">
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-5">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao" id="descricao" class="form-control" value="{{$value->descricao}}">
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="id" value="{{$value->id}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="enviar" value="enviar" class="btn btn-primary">
		</div>
		@endforeach
	</form>
</div>

@endsection


