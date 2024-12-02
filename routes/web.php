<?php

use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeControler::class, 'home'])->name('home');
