<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LivroController;

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

Route::get('/', [UsuarioController::class, 'homeView']);
Route::get('/login', [UsuarioController::class, 'loginView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/minha-conta', [UsuarioController::class, 'minhaContaView']);

Route::get('/pesquisa-livro', [LivroController::class, 'pesquisaLivroView']);
Route::get('/meus-livros', [LivroController::class, 'meusLivrosView']);
Route::get('/info-livro', [LivroController::class, 'infoLivroView']);





