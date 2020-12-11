<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\PedidoController;
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
})->middleware(('auth'));

//Listado de productos
//Route::get('/producto', [ProductoController::class, 'index']);
//Route::get('/producto/create', [ProductoController::class, 'create']);
//Route::get('/producto/{producto}', [ProductoController::class, 'show']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::resource('tipo',TipoController::class);
    Route::resource('pedido',PedidoController::class);
    Route::get('/producto/eliminados', [ProductoController::class, 'eliminados'])->name('producto.eliminados');
    Route::put('/producto/restaurar/{producto}', [ProductoController::class, 'restaurar'])->name('producto.restaurar');
    Route::resource('producto',ProductoController::class);
});

