<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/inicio', [\App\Http\Controllers\PrincipalController::class, 'index'])
->name('site.principal');

Route::get('/login', [\App\Http\Controllers\loginController::class, 'login']);

Route::get('/cadastrar', [\App\Http\Controllers\cadastrarController::class, 'cadastrar']);

Route::get('/dashboard', [\App\Http\Controllers\dashboardController::class, 'dashboard']);

Route::get('/usuarios', [\App\Http\Controllers\usuariosController::class, 'usuarios']);

Route::get('/create', [\App\Http\Controllers\criarTicketController::class, 'criar']);