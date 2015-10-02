<?php




Route::get('auth/register',['as'=>'register',
                        'uses'=>'Auth\AuthController@getRegister']);

Route::post('auth/register',['uses'=>'Auth\AuthController@postRegister']);

Route::get('auth/login',['as'=>'login',
                    'uses'=>'Auth\AuthController@getLogin']);

Route::post('auth/login',['uses'=>'Auth\AuthController@postLogin']);

Route::get('auth/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{
    Route::get('/',function()
    {echo"Добро пожаловать,Админ";});
});

Route::get('cabinet',function(){
    $temp='Данные пользователя, переданные через переменную в роуте';
    return view('templates.cabinet',['content'=>$temp]);
});

Route::get('/{id?}','mainController@index');






