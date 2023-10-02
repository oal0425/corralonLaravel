<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RoleController;
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
Route::resource('productos', ProductController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('usuarios', UserController::class);
Route::get('imprimir_cliente', [GeneradorController::class, 'imprimir_cliente']);
Route::get('imprimir_proveedor', [GeneradorController::class, 'imprimir_proveedor']);
Route::get('imprimir_producto', [GeneradorController::class, 'imprimir_producto']);

Route::get('imprimir_detalle', [GeneradorController::class, 'imprimir_detalle']);
Route::get('imprimir_producto_stock_minimo', [GeneradorController::class, 'imprimir_productos_stock_minimo']);
Route::get('generar_xml_cliente', [GeneradorController::class, 'generar_xml_cliente']);
Route::get('generar_xml_proveedor', [GeneradorController::class, 'generar_xml_proveedor']);
Route::get('generar_xml_producto', [GeneradorController::class, 'generar_xml_producto']);
Route::get('generar_xml_comprobante', [GeneradorController::class, 'generar_xml_comprobante']);


Route::get('/generar_detalle', [DetalleController::class, 'generar_detalle',])->name('generar_detalle');
Route::get('detalle', [DetalleController::class, 'detalle'])->name('detalle.index');

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');


Auth::routes();
Route::get('/logout', [App\Http\Controllers\LogoutController::class,'logout'])->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
