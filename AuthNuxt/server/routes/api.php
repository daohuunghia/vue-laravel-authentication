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
//Route::middleware(['cors'])->group(function () {
//    Route::post('register', 'Auth\AuthController@register')->name('register');
//    Route::post('login', 'Auth\AuthController@login')->name('login');
//    Route::post('user', 'Auth\AuthController@user')->name('user');
//
//    Route::group([
//        'middleware' => 'jwt-verify',
//    ], function($router) {
//        Route::post('user', 'Auth\AuthController@user');
//    });
//});
Route::middleware(['cors', 'api'])->group(function ($router) {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('register', 'UserController@register');
    Route::group(['middleware' => 'jwt-verify'], function() {
        Route::get('me', 'Auth\AuthController@me');
    });
});
