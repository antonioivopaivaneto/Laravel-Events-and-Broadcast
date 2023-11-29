<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
      // Exemplo de debug
      $usuarios = User::all();
      debug($usuarios); // Usa a função helper 'debug' para exibir variáveis na barra de ferramentas

      return view('welcome');
});


Route::get('/contador', [UserController::class, 'showContador'])->name('contador');
Route::get('/registro', [UserController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registrar', [UserController::class, 'register'])->name('registrar');
