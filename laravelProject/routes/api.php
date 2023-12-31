<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Turns;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [Users::class, 'index']);
Route::patch('/turn/{id}',[Turns::class, 'update']);
Route::patch('/users/{id}',[Users::class, 'update']);
Route::get('/turns',[Turns::class, 'show']);
Route::post('/user',[Users::class, 'store']);
Route::post('/product/{user_id}', [ProductController::class, 'store']);
Route::get('/products',[ProductController::class, 'show']);
Route::get('/users/{category}',[Users::class, 'getUsersFromCategory']);
