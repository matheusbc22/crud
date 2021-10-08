<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index (){
        return view('app.usuarios.index');
    }
    public function addUsuario(Request $request){
        $usuario = new Usuario();
        $usuario->create($request->all());
        return redirect('app/clientes');
    }
}
