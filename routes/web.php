<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;

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
    return view('perfil');
});


//route para aceder à pagina de login
Route::get('/login', function() {
    return view('autenticacao');
});

//route para aceder à pagina de registar
Route::get('/registar', function() {
    return view('registo');
});


//routes de login e logout
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->middleware(['auth']);

//routes de registar
Route::post('/registar', [UserController::class, 'registo']);

//grupo de routes que precisam de verificar se existe alguem autenticado e se é administrador
Route::middleware(['auth', 'admin'])->group(function () {
    
});

//grupo de routes que precisam de verificar se existe alguem autenticado e se é socio
Route::middleware(['auth', 'socio'])->group(function () {
    Route::get('/criarproduto', function() {
        return view('criarproduto');
    });
    Route::get('/produtos', [ProdutoController::class, 'verProdutos']);
    Route::post('/criarproduto', [ProdutoController::class, 'criarProduto']);
});

//grupo de routes que precisam de verificar se existe alguem autenticado e se é cliente
Route::middleware(['auth', 'cliente'])->group(function () {
});