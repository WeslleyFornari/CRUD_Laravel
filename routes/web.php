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
Route::get('/main', [UserController::class,'main'])->name('main');
Route::get('/procurar', [UserController::class,'procurar'])->name('procurar');

/* INSERIR */
Route::post('/store', [UserController::class,'store'])->name('store');

Route::get('/inserir', [UserController::class,'inserir'])->name('inserir');
Route::get('/editar/{id}', [UserController::class,'editar'])->name('editar');
Route::post('/update/{id}', [UserController::class,'update'])->name('update');







Route::fallback([Controller::class,'pagina404'])->name('pagina404');

Route::get('/setores', [SetorController::class, 'findSetorAll'])->name('setores');

Route::get('/products', [ProductController::class, 'findAll'])->name('products');
