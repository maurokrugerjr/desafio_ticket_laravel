<?php

use App\Http\Controllers\ProfileController;
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
Route::get('menu-principal', [\App\Http\Controllers\PrincipalController::class, 'visualizar']);

Route::get('/inicio', [\App\Http\Controllers\PrincipalController::class, 'index'])
->name('site.principal')->can('admin');

Route::get('/tickets', [\App\Http\Controllers\dashboardController::class, 'dashboard']);

Route::get('/usuarios', [\App\Http\Controllers\usuariosController::class, 'usuarios']);

Route::get('/create', [\App\Http\Controllers\criarTicketController::class, 'criar'])->can('admin');

Route::post('/create', [\App\Http\Controllers\criarTicketController::class, 'store'])->can('admin');

Route::get('/detalhes/{id}', [\App\Http\Controllers\detalhesController::class, 'detalhes']);

Route::delete('/create/{id}', [\App\Http\Controllers\PrincipalController::class, 'destroy'])->can('admin');

Route::get('/create/{id}', [\App\Http\Controllers\PrincipalController::class, 'edit'])->can('admin', 'agente');

Route::put('create/{id}', [\App\Http\Controllers\PrincipalController::class, 'update'])->can('admin', 'agente');

Route::get('/', function () {
    return view('site.menu-principal');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
