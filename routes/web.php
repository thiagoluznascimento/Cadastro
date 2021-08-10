<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CadastroController; //importando o controlador para poder chamar a rota aqui. seguindo a doc laravel8
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

// Route::get('/', [CadastroController::class, 'CadastroUser']); //estou chamando o controlador na rota principal depois chamo o metodo desse controlador (CadastroUser).
// Route::get('/Filmes', [FilmesController::class, 'Filmes']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
