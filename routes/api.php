<?php


use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function() {
    Route::prefix('auth')->group(function() {
        Route::post('login', 'App\Http\Controllers\Auth\AuthController@login');
        Route::post('register', 'App\Http\Controllers\Auth\UserController@register');
    });
    Route::middleware('auth:api')->group(function() {
        Route::prefix('client')->group(function () {
            Route::post('store', 'App\Http\Controllers\ClientController@store');
        });
    });
});
