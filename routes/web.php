<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'web'], function () {
//    Route::get('/', function () {} );
//    Route::get('/', 'welcomeController@index')->name('index');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/dash', function () {
        return view('admin.index');
    });
});


/*Route::get('/', function () {
    return view('welcome');
});*/
