<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CadastroController; //importando o controlador para poder chamar a rota aqui. seguindo a doc laravel8
use App\Http\Controllers\FavoriteMovieController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('enderecos', [AddressController::class, 'index'])->middleware(['auth'])->name('enderecos');
Route::post('enderecos/salvar', [AddressController::class, 'insertAddress'])->middleware(['auth']);
Route::get('enderecos/{id_address}', [AddressController::class, 'index'])->middleware(['auth']);
Route::post('enderecos/editar/salvar', [AddressController::class, 'updateAddress'])->middleware(['auth']);
Route::get('enderecos/excluir/{id_address}',[AddressController::class, 'deleteAddress'])->middleware(['auth']);

Route::get('filmes', [FavoriteMovieController::class, 'index'] )->middleware(['auth'])->name('filmes');
Route::post('filmes/salvar', [FavoriteMovieController::class, 'insertMovie'])->middleware(['auth']);
Route::get('filmes/{id_movie}', [FavoriteMovieController::class, 'index'])->middleware(['auth']);
Route::post('filmes/editar/salvar', [FavoriteMovieController::class, 'updateMovie'])->middleware(['auth']);
Route::get('filmes/excluir/{id_movie}',[FavoriteMovieController::class, 'deleteMovie'])->middleware(['auth']);

