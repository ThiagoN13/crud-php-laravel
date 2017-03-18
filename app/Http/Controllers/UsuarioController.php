<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

  public function index()
     {
        // $usuarios = Usuario::get();
        // return view('table')->with($usuario);
        // return view('usuario.login',compact('usuarios'));
        return view('usuario.login');
    }

 public function create()
    {
        return view('usuario.create');
    }

  public function show(Request $request)
     {
        $value = $request->session()->get('key');
        if($value && $value->tipo_usuario == 1){
            $usuarios = Usuario::get();
        return view('usuario.table', compact(['usuarios','value']));
        //return view('usuario.table')->with("usuarios", $usuarios);
        } else {
            return redirect()->route('usuario.index');
        }
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


  public function edit($id)
    {


    }

    public function logger(Request $request)
    {
        $email= $request->input('email');
        $senha = $request->input('senha');
        $user = Usuario::where('email' , $email)->get();
        forEach($user as $value)
        if(crypt($senha, $value->senha) === $value->senha){
            $request->session()->put('key', $value);

            return 'Usuario logado';
        }
        else {
            return 'Login e senha incorretas';
        }
       

        
    }

  public function update(Request $request, $id)
    {
        if($value && $value->tipo_usuario == 1){
           $update = Usuario::find($id);
           $update->nome  = $request->input('nome');
           $update->email= $request->input('email');
           $update->descricao = $request->input('descricao');
           $update->senha = bcrypt($request->input('senha'));

            $update->save();
            if($update){
                 return redirect()->route('usuario.index');
            } else {
                return redirect()->route('usuario.login');
            }
        }

    }


  public function destroy($id)
    {
        if($value && $value->tipo_usuario == 1){
             Usuario::destroy($id);
            //return redirect()->route('usuario.table');
            return 'Removido';
        }else {
            return redirect()->route('usuario.index');
        }
       
    }

   public function myedit()
    {
        return $id;
        //Usuario::destroy($id);
        //return redirect()->route('usuario.table');
    } 

    public function logout()
    {
        $request->session()->forget('key');

        return redirect()->route('usuario.login');
    } 

}
