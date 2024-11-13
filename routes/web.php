<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[UsuariosController::class,'index']);
Route::post('/guardar',[UsuariosController::class,'guardar']);
Route::get('/editar/{id}',[UsuariosController::class,'editar']);
Route::put('/actualizar/{id}',[UsuariosController::class,'actualizar']);