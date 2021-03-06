<?php

Route::get('auth/register',['as'=>'register','uses'=>'Auth\AuthController@getRegister']);

Route::controller('/ajax','ajax');

Route::post('auth/register',['uses'=>'Auth\AuthController@postRegister']);

Route::get('auth/login',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);

Route::post('auth/login',['uses'=>'Auth\AuthController@postLogin']);

Route::get('auth/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);

Route::group(['middleware'=>'auth'],function()
{
    Route::controller('cabinet','CarsController');
});

Route::get('/{id?}','mainController@index');






