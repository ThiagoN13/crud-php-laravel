@extends('usuario.template')

@section('content')

<div class="container">
    <h1>Lista de usuarios</h1>
    <span>Bem vindo {{$value}}</span>
    <table class="table  table-hover" id="MyTable">
      <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Email</th>
            <th class="text-center">Descrição</th>
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
                    <td class="text-center"><a style="color: red;" href="/delete/{{$user->id}}"> <img src="./img/remove.png" width="20px" height="17px"></i></a></td>

                    <td class="text-center"> <a style="color: gray;" href="{{url('edit/($user->id)')}}" data-target="#form" data-toggle="modal"> <img src="./img/editar.png" width="20px" height="17px"></a> </td>
                </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection
