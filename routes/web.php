<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

//Listado de productos
//Route::get('/producto', [ProductoController::class, 'index']);
//Route::get('/producto/create', [ProductoController::class, 'create']);
//Route::get('/producto/{producto}', [ProductoController::class, 'show']);
Route::resource('producto',ProductoController::class)->middleware(['auth:sanctum']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
