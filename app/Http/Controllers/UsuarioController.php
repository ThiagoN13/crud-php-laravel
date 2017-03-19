<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

  public function index()
     {
        return view('usuario.login');
    }

 public function create(Request $request)
    {
        $usuario = $request->session()->get('key');
        return view('usuario.create', compact(['usuario']));
    }

  public function show(Request $request)
     {
        $usuario = $request->session()->get('key');
        $usuarios = Usuario::get();
        return view('usuario.table', compact(['usuarios','usuario']));
     }


  public function store(Request $request, \App\Usuario $usuario)
    {
       $usuario->nome  = $request->input('nome');
       $usuario->email= $request->input('email');
       $usuario->descricao = $request->input('descricao');
       $usuario->senha = bcrypt($request->input('senha'));
       $usuario->descricao  = '';

        $usuario->save();
        if($usuario){
             return 'Inserido com sucesso';
        } else {
            return 'Erro ao inserir';
        }
        return 'Carregando';
    }





    public function logger(Request $request)
    {
        $email= $request->input('email');
        $senha = $request->input('senha');
        $user = Usuario::where('email' , $email)->get();
        forEach($user as $value){
          if(crypt($senha, $value->senha) === $value->senha){
            $request->session()->put('key', $value);
            $usuario = $request->session()->get('key');
            return view('template', compact(['usuario']));
         }
        } if($user){
            return "Seu email ou senha estão incorretos<br/>
            <a href='/'>Clique aqui para voltar</a>";
        }

    }

  public function update(Request $request)
    {
       $update = Usuario::find($request->input('id'));
       $update->nome  = $request->input('nome');
       $update->email= $request->input('email');
       $update->descricao = $request->input('descricao');
       $update->senha = bcrypt($request->input('senha'));
       $usuario = $request->session()->get('key');
       $update->save();
       if($update){
          return view('template', compact(['usuario']));
        } else {
          return view('template', compact(['usuario']));
        }

    }


  public function destroy(Request $request)
    {
      $id  = $request->input('id');
      Usuario::destroy($id);
      $usuario = $request->session()->get('key');
      return view('template', compact(['usuario']));


    }

   public function edit($id, Request $request)
    {
        $usuario = $request->session()->get('key');
        $user = Usuario::where('id' , $id)->get();
        return view('usuario.fields', compact(['user', 'usuario']));
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('index');
    }

}
