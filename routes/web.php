<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\LoginControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeControler::class, 'home'])->name('home');
Route::get('/login', [LoginControler::class, 'login'])->name('login');
Route::get('/cadastrar', [HomeControler::class, 'cadastro'])->name('cadastro');
