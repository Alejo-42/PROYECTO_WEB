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
    public function editar($id){
        $editUsuario = Usuarios::where('id',$id)->firstOrFail();
        return view('editarUsuario',compact('editUsuario'));
    }
    public function actualizar(Request $request, $id){
        $actUsuario = Usuarios::findOrFail($id);
        $requestUsuario = $request->all();
        $actUsuario->update($requestUsuario);
        return redirect()->to('/');
    }
    public function eliminar($id){
        $eliminarUsuario = Usuarios::findOrFail($id);
        $eliminarUsuario->delete();
        return redirect()->to('/');
    }
}
