<?php

use App\Http\Controllers\ClienteController;
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
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index' ])->name('clientes.index');

Route::get('/clientes/{id}', [ClienteController::class, 'detalle'])->name('clientes.detalle');

Route::get('/facturas', [Factura::class, 'index'])->name('facturas.index');

Route::get('/facturas/{id}', [Factura::class, 'detalle'])->name('facturas.detalle');
