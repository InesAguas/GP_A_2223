<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/{pagina?}', [ProdutoController::class, 'paginaInicial']);

Route::get('/produtos/{id}/detalhes', [ProdutoController::class, 'detalhesProduto']);

//route para aceder à pagina de login
Route::get('/utilizador/login', function () {
    return view('utilizadores/autenticacao');
});

//route para aceder à pagina de registar
Route::get('/utilizador/registo', function () {
    return view('utilizadores/registo');
});


//routes de login e logout
Route::post('/utilizador/login', [UserController::class, 'login']);
Route::get('/utilizador/logout', [UserController::class, 'logout'])->middleware(['auth']);

//routes de registar
Route::post('/utilizador/registar', [UserController::class, 'registo']);

//grupo de routes que precisam de verificar se existe alguem autenticado e se é administrador
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/administracao/utilizadores', [UserController::class, 'utilizadores']);
    Route::get('/administracao/utilizadores/search/', [UserController::class, 'verUtilizadores'])->name('search', 'filter', 'estado');
    
});


//grupo de routes que precisam de verificar se existe alguem autenticado e se é socio
Route::middleware(['auth', 'socio'])->group(function () {
    Route::get('/produtos/criarproduto', function () {
        return view('produtos/criarproduto');
    });
    Route::get('/produtos/verprodutos', [ProdutoController::class, 'verProdutos']);
    Route::post('/produtos/criarproduto', [ProdutoController::class, 'criarProduto']);
});

//grupo de routes que precisam de verificar se existe alguem autenticado e se é cliente
Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/utilizador/perfil', [UserController::class, 'verPerfil'])->name('perfil');
    Route::post('/utilizador/editarPerfil', [UserController::class, 'editarPerfil']);
    Route::post('/utilizador/apagarPerfil', [UserController::class, 'apagarPerfil']);
});


//routes por causa da verificação de email, ainda nao estao funcionais
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verificaEmail'])->name('verification.verify');
