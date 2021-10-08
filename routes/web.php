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
Route::get('/', [\App\Http\Controllers\UsuarioController::class, 'index'])->name('index');
Route::post('/', [\App\Http\Controllers\UsuarioController::class, 'addUsuario'])->name('indexpost');

Route::prefix('/app')->group(function(){
    Route::get('/', function () {
        return redirect()->route('app.clientes.index');
    });
    Route::prefix('/clientes')->group(function(){
        Route::get('/', [\App\Http\Controllers\ClienteController::class, 'index'])->name('app.clientes.index');
        Route::get('/adicionar', [\App\Http\Controllers\ClienteController::class, 'addCliente'])->name('app.clientes.adicionar');
        Route::post('/adicionar', [\App\Http\Controllers\ClienteController::class, 'addClienteDb'])->name('app.clientes.adicionarpost');
        Route::get('/editar/{id}', [\App\Http\Controllers\ClienteController::class, 'editaCliente'])->name('app.clientes.editar');
        Route::post('/editar', [\App\Http\Controllers\ClienteController::class, 'editaClienteDb'])->name('app.clientes.editarpost');
    });
    Route::prefix('/propostas')->group(function(){
        Route::get('/', [\App\Http\Controllers\PropostaController::class, 'index'])->name('app.propostas.index');
        Route::get('/exportar', [\App\Http\Controllers\PropostaController::class, 'exportacao'])->name('app.propostas.exportacao');
        Route::get('/adicionar/{id}', [\App\Http\Controllers\PropostaController::class, 'addProposta'])->name('app.propostas.adicionar');
        Route::post('/adicionar', [\App\Http\Controllers\PropostaController::class, 'addPropostaDb'])->name('app.propostas.adicionarpost');
        Route::get('/editar/{id}', [\App\Http\Controllers\PropostaController::class, 'editaProposta'])->name('app.propostas.editar');
        Route::post('/editar', [\App\Http\Controllers\PropostaController::class, 'editaPropostaDb'])->name('app.propostas.editarpost');
    });
    Route::get('/propostas', [\App\Http\Controllers\PropostaController::class, 'index'])->name('app.propostas.index');
});
