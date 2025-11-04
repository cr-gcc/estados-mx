<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/estados-inegi', [HomeController::class, 'estadosInegi']);
Route::get('/carga-inegi', [HomeController::class, 'cargaInegi']);
