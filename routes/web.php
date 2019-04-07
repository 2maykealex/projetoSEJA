<?php

Route::group(['namespace' => 'Site', 'prefix' => '/'], function () {
    Route::get('', 'SiteController@index')->name("site.home");
    Route::get('contatos', 'SiteController@contact')->name("site.contatos");
    Route::get('quem-somos', 'SiteController@whoWeare')->name("site.quemsomos");
    Route::get('onde-estamos', 'SiteController@whereWeAre')->name("site.localizacao");
    Route::get('inscreva-se', 'SiteController@subscribe')->name("site.subscribe");

    Route::get('login', 'SiteController@doLogin')->name("site.login");
    Route::post('login-validate', 'SiteController@validateLogin')->name("site.login.validate");
});

Route::group(['namespace' => 'Adm', 'prefix' => 'adm'], function () {
    Route::get('', 'AdmController@index')->name("adm.home");
    Route::get('new', 'AdmController@create')->name("adm.new");
    Route::post('new-save', 'AdmController@store')->name("adm.store");
    Route::get('show/{id}', 'AdmController@show')->name("adm.show");
    Route::get('edit/{id}', 'AdmController@edit')->name("adm.edit");
    Route::post('update/{id}', 'AdmController@update')->name("adm.update");
});

// Route::get('/', function () {
//     return view('index');
// });
