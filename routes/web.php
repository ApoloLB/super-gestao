<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';});
    Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobre-nos');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function(){return 'produtos';});
});

route::get('/contato/{nome}', function(string $nome){
    echo 'Seja bem vindo: '.$nome;
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'index'])->name('site.teste');



// Route::fallback(function(){
//     echo 'A rota não existe. <a href="'.route('site.index').'">Clique Aqui</a> para ir para a página inicial.';
// });

