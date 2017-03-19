@extends('template')

@section('content')


<div class="container">
    <h1>Lista de usuarios</h1>
    <span>Bem vindo {{$usuario->nome}}</span>
    <table class="table  table-hover" id="MyTable">
      <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Email</th>
            <th class="text-center">Descrição</th>
            <th class="text-center">Permissões</th>
            <th class="text-center">Excluir</th>
            <th class="text-center">Editar</th>
        </tr>
      </thead>
      <tbody>
      @foreach($usuarios as $user)
            <tr>
                <td class="text-center">{{$user->id}}</td>
                <td class="text-center">{{$user->nome}}</td>
                <td class="text-center">{{$user->email}}</td>
                <td class="text-center">{{$user->descricao}}</td>
                <td class="text-center">
                    @if($user->tipo_usuario == 1) Administrador
                    @else Membro
                    @endif
                </td>
                <td class="text-center">
                <form action="/delete" method="POST">
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-default" type="submit" value="delete">
                        <img src="./img/remove.png" width="15px" height="14px"></img>
                    </button>
                </td>
                </form>

                <td class="text-center"><a href="/usuario/{{ $user->id }}/edit" class="btn btn-default"><img src="./img/editar.png" width="15px" height="14px"> </a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection

