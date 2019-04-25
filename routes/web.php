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

    Route::group(['prefix' => 'subscriptions-plans'], function () {
        Route::get('list', 'SubscriptionPlanController@index')->name("adm.subscriptions.plans.list");
        Route::get('new', 'SubscriptionPlanController@create')->name("adm.subscriptions.plans.new");
        Route::get('show/{id}', 'SubscriptionPlanController@show')->name("adm.subscriptions.plans.show");
        Route::get('edit/{id}', 'SubscriptionPlanController@edit')->name("adm.subscriptions.plans.edit");
        Route::get('delete/{id}', 'SubscriptionPlanController@destroy')->name("adm.subscriptions.plans.delete");
        Route::post('update/{id}', 'SubscriptionPlanController@update')->name("adm.subscriptions.plans.update");
        Route::post('store/{id}', 'SubscriptionPlanController@store')->name("adm.subscriptions.plans.store");
    });

    Route::group(['prefix' => 'subscriptions-types'], function () {
        Route::get('list', 'SubscriptionTypeController@index')->name("adm.subscriptions.types.list");
        Route::get('new', 'SubscriptionTypeController@create')->name("adm.subscriptions.types.new");
        Route::get('show/{id}', 'SubscriptionTypeController@show')->name("adm.subscriptions.types.show");
        Route::get('edit/{id}', 'SubscriptionTypeController@edit')->name("adm.subscriptions.types.edit");
        Route::get('delete/{id}', 'SubscriptionTypeController@destroy')->name("adm.subscriptions.types.delete");
        Route::post('update/{id}', 'SubscriptionTypeController@update')->name("adm.subscriptions.types.update");
        Route::post('store/{id}', 'SubscriptionTypeController@store')->name("adm.subscriptions.types.store");
    });
    
    Route::group(['prefix' => 'congresses-types'], function () {
        Route::get('list', 'CongressesTypeController@index')->name("adm.congresses.types.list");
        Route::get('new', 'CongressesTypeController@create')->name("adm.congresses.types.new");
        Route::get('show/{id}', 'CongressesTypeController@show')->name("adm.congresses.types.show");
        Route::get('edit/{id}', 'CongressesTypeController@edit')->name("adm.congresses.types.edit");
        Route::get('delete/{id}', 'CongressesTypeController@destroy')->name("adm.congresses.types.delete");
        Route::post('update/{id}', 'CongressesTypeController@update')->name("adm.congresses.types.update");
        Route::post('store/{id}', 'CongressesTypeController@store')->name("adm.congresses.types.store");
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
Route::get('logout', 'Auth\LoginController@logout')->name('site.logout');
Route::get('/', 'Site\SiteController@index');
