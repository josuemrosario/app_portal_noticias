<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


//Aula 401 - Implementando a consulta e visualização das notícias
//Implementa todas as rotas que executam os métodos de NoticiaController
// Usar php artisan route:list para confirmar se forma devidamente mapeadas
Route::Resource('noticia',App\Http\Controllers\NoticiaController::Class);