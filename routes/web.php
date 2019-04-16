<?php

Route::group(['namespace' => 'Site', 'prefix' => '/site'], function () {
    Route::get('', 'SiteController@index')->name("site.home");
    Route::get('contatos', 'SiteController@contact')->name("site.contatos");
    Route::get('quem-somos', 'SiteController@whoWeare')->name("site.quemsomos");
    Route::get('onde-estamos', 'SiteController@whereWeAre')->name("site.localizacao");
    
});

Route::group(['middleware' => ['auth', 'authRoute'], 'namespace' => 'Adm', 'prefix' => 'adm'], function () {
    Route::get('', 'AdmController@index')->name("adm.home");
    Route::get('new', 'AdmController@create')->name("adm.new");
    Route::post('new-save', 'AdmController@store')->name("adm.store");
    Route::get('show/{id}', 'AdmController@show')->name("adm.show");
    Route::get('edit/{id}', 'AdmController@edit')->name("adm.edit");
    Route::post('update/{id}', 'AdmController@update')->name("adm.update");
});

Route::post('login-validate', 'Site\SiteController@validateLogin')->name("site.login.validate");
Route::post('subscribe/store', 'Site\SiteController@subscribeStore')->name("site.subscribe.store");
Route::get('inscreva-se', 'Site\SiteController@subscribe')->name("subscribe")->middleware('authRoute');
Route::get('login', 'Site\SiteController@doLogin')->name("site.login");
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/', 'Site\SiteController@index');
