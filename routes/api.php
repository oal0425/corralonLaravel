<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
Get petition
Route that allows you to communicate with the server and retrieve information about
the products stored in the database
*/

Route::get('/producto', [ApiController::class,'producto']);
Route::get('/proveedor', [ApiController::class,'proveedor'] );
Route::get('/cliente', [ApiController::class,'cliente']);
