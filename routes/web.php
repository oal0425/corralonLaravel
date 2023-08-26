<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GeneradorController;
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


Route::resource('carros', CarroController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('comprobantes', ComprobanteController::class);
Route::resource('detalles', DetalleController::class);
Route::resource('productos', ProductoController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('usuarios', UserController::class);
Route::get('imprimir_cliente', [GeneradorController::class, 'imprimir_cliente']);
Route::get('imprimir_proveedor', [GeneradorController::class, 'imprimir_proveedor']);
Route::get('imprimir_producto', [GeneradorController::class, 'imprimir_producto']);
Route::get('imprimir_comprobante', [GeneradorController::class, 'imprimir_comprobante']);
Route::get('generar_xml_cliente', [GeneradorController::class, 'generar_xml_cliente']);
Route::get('generar_xml_proveedor', [GeneradorController::class, 'generar_xml_proveedor']);
Route::get('generar_xml_producto', [GeneradorController::class, 'generar_xml_producto']);
Route::get('generar_xml_comprobante', [GeneradorController::class, 'generar_xml_comprobante']);




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
