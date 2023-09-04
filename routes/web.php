<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Models\Productos;
use App\Http\Controllers\VentasController;

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

Route::get('/', function () {
    return view('welcome');
});
/* Route::get('productos.productos', function () {
    $product = Productos::OrderBy('idproducto')->get();
    return view('home',compact('productos'));
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos-list/{id}','CategoriasController@show')->name('productos.show');
//Route::get('/productos/index', 'ProductosController@index')->name('productos.index');
Route::get('/productos/show', 'ProductosController@showProducts')->name('productos.catalogo');
//Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
/* Route::get('/productos/{id}', 'ProductosController@show')->name('productos.show'); */
Route::get('/producto','VentasController@mostrarVentasPorProducto')->name('productos.index');
