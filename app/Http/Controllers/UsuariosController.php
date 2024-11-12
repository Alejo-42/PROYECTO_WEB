<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function index(){
        $getUsuario = Usuarios::all();
        return view('usuarios', compact('getUsuario'));
    }

    public function guardar(Request $request){
        Usuarios::create($request->all());
        return redirect()->to('/');
    }
}
