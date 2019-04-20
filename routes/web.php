<?php

Route::group(['namespace' => 'Site', 'prefix' => '/site'], function () {
    Route::get('', 'SiteController@index')->name("site.home");
    Route::get('contatos', 'SiteController@contact')->name("site.contatos");
    Route::get('quem-somos', 'SiteController@whoWeare')->name("site.quemsomos");
    Route::get('onde-estamos', 'SiteController@whereWeAre')->name("site.localizacao");
    
});

Route::group(['middleware' => ['auth', 'authRoute'], 'namespace' => 'Adm', 'prefix' => 'adm'], function () {
    
    Route::group(['prefix' => 'colletions'], function () {
        Route::get('list', 'ColletionController@index')->name("adm.colletions.list");
        Route::get('new', 'ColletionController@create')->name("adm.colletions.new");
        Route::get('show/{id}', 'ColletionController@show')->name("adm.colletions.show");
        Route::get('edit/{id}', 'ColletionController@edit')->name("adm.colletions.edit");
        Route::get('delete/{id}', 'ColletionController@destroy')->name("adm.colletions.delete");
        Route::post('update/{id}', 'ColletionController@update')->name("adm.colletions.update");
        Route::post('store/{id}', 'ColletionController@store')->name("adm.colletions.store");
        // Route::get('list', 'SubscriptionPlanController@index')->name("adm.colletions.list");
    });

    Route::get('', 'AdmController@index')->name("adm.home");
    Route::get('new', 'AdmController@create')->name("adm.new");
    Route::post('new-save', 'AdmController@store')->name("adm.store");
    Route::get('show/{id}', 'AdmController@show')->name("adm.show");
    Route::get('edit/{id}', 'AdmController@edit')->name("adm.edit");
    Route::post('update/{id}', 'AdmController@update')->name("adm.update");
});

Route::get('inscreva-se', 'Site\SiteController@subscribe')->name("subscribe")->middleware('authRoute');
Route::get('listCities/{idUF}', 'Site\SiteController@listCities')->name("listCities")->middleware('authRoute');
Route::get('login', 'Site\SiteController@doLogin')->name("site.login")->middleware('authRoute');

Route::post('check-user/{email}', 'UserController@checkUser')->name("check.user");
Route::post('login-validate', 'Site\SiteController@validateLogin')->name("site.login.validate");
Route::post('subscriber/store', 'Subscriber\SubscriberController@store')->name("subscriber.store");
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/', 'Site\SiteController@index');
