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

Route::get('/', function () {
    return view('utilizadores/perfil');
});

//route para aceder à pagina de login
Route::get('/login', function() {
    return view('utilizadores/autenticacao');
});

//route para aceder à pagina de registar
Route::get('/registar', function() {
    return view('utilizadores/registo');
});


//routes de login e logout
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->middleware(['auth']);

//routes de registar
Route::post('/registar', [UserController::class, 'registo']);

//routes de ver utilizadores
Route::get('/utilizadores', [UserController::class, 'verUtilizadores']);

//grupo de routes que precisam de verificar se existe alguem autenticado e se é administrador
Route::middleware(['auth', 'admin'])->group(function () {
    
});

//grupo de routes que precisam de verificar se existe alguem autenticado e se é socio
Route::middleware(['auth', 'socio'])->group(function () {
    Route::get('/criarproduto', function() {
        return view('produtos/criarproduto');
    });
    Route::get('/produtos', [ProdutoController::class, 'verProdutos']);
    Route::post('/criarproduto', [ProdutoController::class, 'criarProduto']);
});

//grupo de routes que precisam de verificar se existe alguem autenticado e se é cliente
Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/cenas', function() {
        return view('utilizadores/perfil');
    });
});




//routes por causa da verificação de email, ainda nao estao funcionais
Route::get('/email/verify', function () {
    return view('perfil');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
