<?php

use Illuminate\Http\Request;

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
Route::group(['prefix' => 'v1/players'], function () {
    Route::get('', 'API\V1\PlayerController@index');
    Route::get('{player}', 'API\V1\PlayerController@show');
    Route::get('/guzzle/test', 'API\V1\PlayerController@guzzle');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
