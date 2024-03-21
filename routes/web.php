<?php

use App\Http\Controllers\productController;
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


Route::get('/', [productController::class, 'index']);

Route::get('/create', [productController::class, 'createdata']);

Route::post('/store', [productController::class, 'storedata']);

Route::get('/delete/{id}', [productController::class, 'deleteproduct']);

Route::get('/Edit/{id}', [productController::class, 'EditProduct']);
Route::put('/EditPruduct/{id}', [productController::class, 'UpdateProduct']);

