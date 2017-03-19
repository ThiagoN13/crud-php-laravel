@extends('index')

@section('conteudo')

<div class="container">
	<h1>Controle de acesso</h1>
	<form method="post" action="{{url('/logar')}}">

		<div class="row">
			<div class="form-group col-xs-5">
				<label for="email">E-mail:</label>
				<input type="text" name="email" id="email" class="form-control" required>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-xs-5">
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" name="enviar" value="enviar" class="btn btn-primary">
		</div>

	</form>
</div>

@endsection


