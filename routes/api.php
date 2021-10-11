<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('products', [ProductsController::class, 'actionIndex']);

Route::get('products/{product}', [ProductsController::class, 'actionShow']);

Route::post('products', [ProductsController::class, 'actionStore']);

Route::put('products/{product}', [ProductsController::class, 'actionUpdate']);

Route::delete('products/{product}', [ProductsController::class, 'actionDelete']);
