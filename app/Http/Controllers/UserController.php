<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuario-listagem', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuario-cadastro');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        $usario = User::create($dados);
        return redirect()->route('usuario.index');
    }

    public function show(string $id)
    {
        $usuario = User::find($id);

        if($usuario){
            return view('usuario-detalhes', ['usuario' => $usuario]);
        }else{
            return redirect()->route('usuario.index');
        }
        
    }

    public function edit(string $id)
    {
        $usuario = User::find($id);
        return view('usuario-edicao', ['usuario' => $usuario]);
    }

    public function update(Request $request)
    {
        $usuario = User::find($request->id);
        $usuario->update($request->all());

        return redirect()->route('usuario.index');
    }

    public function destroy(string $id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('usuario.index');
    }
}
