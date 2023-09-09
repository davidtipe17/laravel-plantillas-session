<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;

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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login/auth', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/principal', function(){
// 	// Obtengo el valor del variable en sesión $usuario,
// 	// de lo contrario, si no existe, devuelvo el varlor "invitado"
// 	echo session('usuario', 'invitado');
// });
Route::get('/principal', [PrincipalController::class, 'index'])->name('principal');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::get('/pos', [PosController::class, 'index'])->name('pos');
