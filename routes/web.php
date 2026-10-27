<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobre-nos');

Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';});
    Route::get('/fornecedores', function(){return 'login';});
    Route::get('/produtos', function(){return 'produtos';});
});

route::get('/contato/{nome}', function(string $nome){
    echo 'Seja bem vindo: '.$nome;
});


Route::get('/rota1', function(){
    echo 'rota1';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function(){
    echo 'A rota não existe. <a href="'.route('site.index').'">Clique Aqui</a> para ir para a página inicial.';
});

