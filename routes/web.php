<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\UserController;
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
/* Procurar */
Route::get('/', [UserController::class,'listar'])->name('home');
Route::get('/procurar', [UserController::class,'procurar'])->name('procurar');

/* INSERIR */
Route::get('/cadastrar', [UserController::class,'cadastrar'])->name('cadastrar');
Route::post('/salvar', [UserController::class,'salvar'])->name('salvar');


/* UPDATE */
Route::get('/editar/{id}', [UserController::class,'editar_id'])->name('editar');
Route::post('/update/{id}', [UserController::class,'update'])->name('update');

Route::get('/deletar/{id}', [UserController::class,'deletar'])->name('deletar');













Route::fallback([Controller::class,'pagina404'])->name('pagina404');

Route::get('/setores', [SetorController::class, 'findSetorAll'])->name('setores');

Route::get('/products', [ProductController::class, 'findAll'])->name('products');
