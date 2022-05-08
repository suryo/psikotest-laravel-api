<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});





/**
 * route resource user
*/
Route::apiResource('/user', App\Http\Controllers\Api\UserController::class);
Route::get('/userlogin', 'App\Http\Controllers\Api\UserController@getuserlogin');
Route::put('/user', 'App\Http\Controllers\Api\UserController@update');

/**
 * route resource papi
*/
Route::apiResource('/papi', App\Http\Controllers\Api\PapiController::class);
/**
 * route resource tiu
*/
Route::apiResource('/tiu', App\Http\Controllers\Api\TiuController::class);
/**
 * route resource riasec
*/
Route::apiResource('/riasec', App\Http\Controllers\Api\RiasecController::class);