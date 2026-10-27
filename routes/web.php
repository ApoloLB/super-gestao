<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/sobre-nos', [SobreNosController::class, 'index']);

Route::get('/contato', [ContatoController::class, 'index']);