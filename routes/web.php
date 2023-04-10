<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/inicio', [\App\Http\Controllers\PrincipalController::class, 'index']);

Route::get('/login', function(){ return 'login';});

Route::get('/cadastrar', function(){ return 'cadastrar';});

Route::get('/dashboard', [\App\Http\Controllers\dashboardController::class, 'dashboard']);

Route::get('/usuarios', [\App\Http\Controllers\usuariosController::class, 'usuarios']);