<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\InfracaoController;

Route::get('/', [HomeControler::class, 'home'])->name('home');

Route::post('/infracoes', [InfracaoController::class, 'buscarInfracoes'])->name('infracoes.buscar');
