<?php

use App\Http\Controllers\EncomendaController;
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

Route::middleware(['authcliente'])->group(function () {
    Route::get('/', [ProdutoController::class, 'paginaInicial']);
    Route::get('/produtos/{id}/detalhes', [ProdutoController::class, 'detalhesProduto']);
    Route::post('/guardar-comentarios/{id}', [ProdutoController::class, 'guardarComentarios']);
});

//route para aceder à pagina de login
Route::get('/utilizador/login', function () {
    return view('utilizadores/autenticacao');
});

//route para aceder à pagina de registar
Route::get('/utilizador/registo', function () {
    return view('utilizadores/registo');
});

//route para aceder à pagina sobre + contactos
Route::get('/sobre-contactos', function () {
    return view('utilizadores/sobre-contactos');
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
    Route::get('/produtos/{id}/editarproduto', [ProdutoController::class, 'editarProdutoView']);
    Route::put('/produtos/{id}/editarproduto', [ProdutoController::class, 'editarProduto']);
    Route::delete('/produtos/{id}/apagarproduto', [ProdutoController::class, 'apagarProduto']);
    Route::get('/administracao/encomendas', [EncomendaController::class, 'adminEncomendas']);
    Route::post('/administracao/encomendas/{id}/cancelarencomenda', [EncomendaController::class, 'cancelarEncomenda']);
    Route::post('/administracao/encomendas/{id}/confirmarencomenda', [EncomendaController::class, 'confirmarEncomenda']);
    Route::post('/administracao/encomendas/{id}/entregarencomenda', [EncomendaController::class, 'entregarEncomenda']);
});

//grupo de routes que precisam de verificar se existe alguem autenticado e se é cliente
Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/utilizador/perfil', [UserController::class, 'verPerfil'])->name('perfil');
    Route::post('/utilizador/editarPerfil', [UserController::class, 'editarPerfil']);
    Route::post('/utilizador/apagarPerfil', [UserController::class, 'apagarPerfil']);
    Route::get('/utilizador/encomendas', [EncomendaController::class, 'verEncomendas']);
});


//routes por causa da verificação de email, ainda nao estao funcionais
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verificaEmail'])->name('verification.verify');
