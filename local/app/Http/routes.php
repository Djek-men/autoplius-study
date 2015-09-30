<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/{id?}','mainController@index');

Route::get('/', function () {
    return view('index');
});

Route::get('base',function(){
    return view('main_base');
});


Route::get('usedauto', function () {
    return view('form-usedauto');
});

Route::get('contacts', function () {
    return view('contacts');
});
Route::get('global_find', function () {
    return view('templates.global_find');
});