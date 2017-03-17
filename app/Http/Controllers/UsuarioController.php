<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

  public function index()
     {
         $usuario = Usuario::get();
         return view('usuario.index')->with('usuario', $usuario);
     }

 public function create()
    {
        return view('usuario.create');
    }

  public function show()
     {
     }

  public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nome = $request->input('nome');
        $usuario->email  = $request->input('email');
        $usuario->senha  = $request->input('senha');
        $usuario->tipo_usuario  = $request->input('tipo_usuario');
        $usuario->descricao  = $request->input('descricao');


        $usuario->save();

        return redirect()->route('usuario.index');
    }

  public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.edit')->with('usuario', $usuario);
    }

  public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nome = $request->input('nome');
        $usuario->email  = $request->input('email');
        $usuario->senha  = $request->input('senha');
        $usuario->tipo_usuario  = $request->input('tipo_usuario');
        $usuario->descricao  = $request->input('descricao');
        $usuario->save();
        return redirect()->route('usuario.index');
    }


  public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuario.index');
    }

}
