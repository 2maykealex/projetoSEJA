<?php

Route::group(['namespace' => 'Site', 'prefix' => '/site'], function () {
    Route::get('', 'SiteController@index')->name("site.home");
    Route::get('contatos', 'SiteController@contact')->name("site.contatos");
    Route::get('quem-somos', 'SiteController@whoWeare')->name("site.quemsomos");
    Route::get('onde-estamos', 'SiteController@whereWeAre')->name("site.localizacao");
    
});

Route::group(['middleware' => ['auth', 'authRoute'], 'namespace' => 'Adm', 'prefix' => 'adm'], function () {
    
    Route::group(['prefix' => 'collections'], function () {
        Route::get('list', 'CollectionController@index')->name("adm.collections.list");
        Route::get('new', 'CollectionController@create')->name("adm.collections.new");
        Route::get('show/{id}', 'CollectionController@show')->name("adm.collections.show");
        Route::get('edit/{id}', 'CollectionController@edit')->name("adm.collections.edit");
        Route::get('delete/{id}', 'CollectionController@destroy')->name("adm.collections.delete");
        Route::post('update/{id}', 'CollectionController@update')->name("adm.collections.update");
        Route::post('store/{id}', 'CollectionController@store')->name("adm.collections.store");
    });

    Route::group(['prefix' => 'subscriptions-types'], function () {
        Route::get('list', 'CollectionController@index')->name("adm.subscriptions.types.list");
        Route::get('new', 'CollectionController@create')->name("adm.subscriptions.types.new");
        Route::get('show/{id}', 'CollectionController@show')->name("adm.subscriptions.types.show");
        Route::get('edit/{id}', 'CollectionController@edit')->name("adm.subscriptions.types.edit");
        Route::get('delete/{id}', 'CollectionController@destroy')->name("adm.subscriptions.types.delete");
        Route::post('update/{id}', 'CollectionController@update')->name("adm.subscriptions.types.update");
        Route::post('store/{id}', 'CollectionController@store')->name("adm.subscriptions.types.store");
    });

    Route::get('', 'AdmController@index')->name("adm.home");
    Route::get('new', 'AdmController@create')->name("adm.new");
    Route::post('new-save', 'AdmController@store')->name("adm.store");
    Route::get('show/{id}', 'AdmController@show')->name("adm.show");
    Route::get('edit/{id}', 'AdmController@edit')->name("adm.edit");
    Route::post('update/{id}', 'AdmController@update')->name("adm.update");
    // rota para testes
    Route::get('planos', 'AdmController@planos')->name("adm.planos");
});

Route::get('inscreva-se', 'Site\SiteController@subscribe')->name("subscribe")->middleware('authRoute');
Route::get('listCities/{idUF}', 'Site\SiteController@listCities')->name("listCities")->middleware('authRoute');
Route::get('login', 'Site\SiteController@doLogin')->name("site.login")->middleware('authRoute');

Route::post('check-user/{email}', 'UserController@checkUser')->name("check.user");
Route::post('login-validate', 'Site\SiteController@validateLogin')->name("site.login.validate");
Route::post('subscriber/store', 'Subscriber\SubscriberController@store')->name("subscriber.store");
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/', 'Site\SiteController@index');
