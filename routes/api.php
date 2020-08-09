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
Route::post('client',ClientController::class.'@store');
Route::get('client/{id}',ClientController::class.'@show');
Route::delete('client/{id}',ClientController::class.'@destroy');
Route::put('client/{id}',ClientController::class.'@update');
Route::get('client/search/name',ClientController::class.'@searchByName');
Route::get('client/search/phone',ClientController::class.'@searchByPhone');
Route::get('client/search/email',ClientController::class.'@searchByEmail');
#Route::get('client/search/{type}',ClientController::class.'@search')
#    ->where('type', 'name|phone|email|all');
