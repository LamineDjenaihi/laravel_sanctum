<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Public Routes
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/register', 'AuthController@register')->name('register');

//Private Routes
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::resource('/tasks', 'TasksController');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});