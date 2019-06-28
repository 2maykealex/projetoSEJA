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
        Route::post('store', 'CollectionController@store')->name("adm.collections.store");
    });

    Route::group(['prefix' => 'subscriptions-plans'], function () {
        Route::get('list', 'SubscriptionPlanController@index')->name("adm.subscriptions.plans.list");
        Route::get('new', 'SubscriptionPlanController@create')->name("adm.subscriptions.plans.new");
        Route::get('show/{id}', 'SubscriptionPlanController@show')->name("adm.subscriptions.plans.show");
        Route::get('edit/{id}', 'SubscriptionPlanController@edit')->name("adm.subscriptions.plans.edit");
        Route::get('delete/{id}', 'SubscriptionPlanController@destroy')->name("adm.subscriptions.plans.delete");
        Route::post('update/{id}', 'SubscriptionPlanController@update')->name("adm.subscriptions.plans.update");
        Route::post('store', 'SubscriptionPlanController@store')->name("adm.subscriptions.plans.store");
    });

    Route::group(['prefix' => 'subscriptions-types'], function () {
        Route::get('list', 'SubscriptionTypeController@index')->name("adm.subscriptions.types.list");
        Route::get('new', 'SubscriptionTypeController@create')->name("adm.subscriptions.types.new");
        Route::get('show/{id}', 'SubscriptionTypeController@show')->name("adm.subscriptions.types.show");
        Route::get('edit/{id}', 'SubscriptionTypeController@edit')->name("adm.subscriptions.types.edit");
        Route::get('delete/{id}', 'SubscriptionTypeController@destroy')->name("adm.subscriptions.types.delete");
        Route::post('update/{id}', 'SubscriptionTypeController@update')->name("adm.subscriptions.types.update");
        Route::post('store', 'SubscriptionTypeController@store')->name("adm.subscriptions.types.store");
    });

    Route::group(['prefix' => 'congresses-types'], function () {
        Route::get('list', 'CongressTypeController@index')->name("adm.congresses.types.list");
        Route::get('new', 'CongressTypeController@create')->name("adm.congresses.types.new");
        Route::get('show/{id}', 'CongressTypeController@show')->name("adm.congresses.types.show");
        Route::get('edit/{id}', 'CongressTypeController@edit')->name("adm.congresses.types.edit");
        Route::get('delete/{id}', 'CongressTypeController@destroy')->name("adm.congresses.types.delete");
        Route::post('update/{id}', 'CongressTypeController@update')->name("adm.congresses.types.update");
        Route::post('store', 'CongressTypeController@store')->name("adm.congresses.types.store");
    });

    Route::group(['prefix' => 'events-types'], function () {
        Route::get('list', 'EventTypeController@index')->name("adm.events.types.list");
        Route::get('new', 'EventTypeController@create')->name("adm.events.types.new");
        Route::get('show/{id}', 'EventTypeController@show')->name("adm.events.types.show");
        Route::get('edit/{id}', 'EventTypeController@edit')->name("adm.events.types.edit");
        Route::get('delete/{id}', 'EventTypeController@destroy')->name("adm.events.types.delete");
        Route::post('update/{id}', 'EventTypeController@update')->name("adm.events.types.update");
        Route::post('store', 'EventTypeController@store')->name("adm.events.types.store");
    });

    Route::group(['prefix' => 'posts-types'], function () {
        Route::get('list', 'PostTypeController@index')->name("adm.posts.types.list");
        Route::get('new', 'PostTypeController@create')->name("adm.posts.types.new");
        Route::get('show/{id}', 'PostTypeController@show')->name("adm.posts.types.show");
        Route::get('edit/{id}', 'PostTypeController@edit')->name("adm.posts.types.edit");
        Route::get('delete/{id}', 'PostTypeController@destroy')->name("adm.posts.types.delete");
        Route::post('update/{id}', 'PostTypeController@update')->name("adm.posts.types.update");
        Route::post('store', 'PostTypeController@store')->name("adm.posts.types.store");
    });

    Route::group(['namespace' => 'Security', 'prefix' => 'security'], function () {
        Route::group(['prefix' => 'profiles-accesses'], function () {
            Route::get('list', 'ProfileAccessController@index')->name("adm.security.profile.list");
            Route::get('show/{id}', 'ProfileAccessController@show')->name("adm.security.profile.show");
        });
    });

    Route::group(['prefix' => 'events'], function () {
        Route::get('list', 'EventController@index')->name("adm.events.list");
        Route::get('new', 'EventController@create')->name("adm.events.new");
        Route::get('show/{id}', 'EventController@show')->name("adm.events.show");
        Route::get('edit/{id}', 'EventController@edit')->name("adm.events.edit");
        Route::get('delete/{id}', 'EventController@destroy')->name("adm.events.delete");
        Route::post('update/{id}', 'EventController@update')->name("adm.events.update");
        Route::post('store', 'EventController@store')->name("adm.events.store");
    });

    Route::group(['prefix' => 'congresses'], function () {
        Route::get('list', 'CongressController@index')->name("adm.congresses.list");
        Route::get('new', 'CongressController@create')->name("adm.congresses.new");
        Route::get('show/{id}', 'CongressController@show')->name("adm.congresses.show");
        Route::get('edit/{id}', 'CongressController@edit')->name("adm.congresses.edit");
        Route::get('delete/{id}', 'CongressController@destroy')->name("adm.congresses.delete");
        Route::post('update/{id}', 'CongressController@update')->name("adm.congresses.update");
        Route::post('store', 'CongressController@store')->name("adm.congresses.store");
    });

    Route::group(['prefix' => 'publishers'], function () {
        Route::get('list', 'PublisherController@index')->name("adm.publishers.list");
        Route::get('new', 'PublisherController@create')->name("adm.publishers.new");
        Route::get('show/{id}', 'PublisherController@show')->name("adm.publishers.show");
        Route::get('edit/{id}', 'PublisherController@edit')->name("adm.publishers.edit");
        Route::get('delete/{id}', 'PublisherController@destroy')->name("adm.publishers.delete");
        Route::post('update/{id}', 'PublisherController@update')->name("adm.publishers.update");
        Route::post('store', 'PublisherController@store')->name("adm.publishers.store");
    });

    Route::get('', 'AdmController@index')->name("adm.home");
    Route::get('new', 'AdmController@create')->name("adm.new");
    Route::post('new-save', 'AdmController@store')->name("adm.store");
    Route::get('show/{id}', 'AdmController@show')->name("adm.show");
    Route::get('edit/{id}', 'AdmController@edit')->name("adm.edit");
    Route::post('update/{id}', 'AdmController@update')->name("adm.update");
});

Route::group(['middleware' => ['auth', 'authRoute'], 'namespace' => 'Publisher', 'prefix' => 'publisher'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('list', 'PostController@index')->name("publisher.posts.list");
        Route::get('new', 'PostController@create')->name("publisher.posts.new");
        Route::get('show/{id}', 'PostController@show')->name("publisher.posts.show");
        Route::get('edit/{id}', 'PostController@edit')->name("publisher.posts.edit");
        Route::get('delete/{id}', 'PostController@destroy')->name("publisher.posts.delete");
        Route::post('update/{id}', 'PostController@update')->name("publisher.posts.update");
        Route::post('store', 'PostController@store')->name("publisher.posts.store");
    });

    Route::group(['prefix' => 'congresses'], function () {
        Route::get('list', 'CongressController@index')->name("publisher.congresses.list");
        Route::get('show/{id}', 'CongressController@show')->name("publisher.congresses.show");
    });

    Route::group(['prefix' => 'events'], function () {
        Route::get('list', 'EventController@index')->name("publisher.events.list");
        Route::get('show/{id}', 'EventController@show')->name("publisher.events.show");
    });
    
    Route::get('', 'PublisherController@index')->name("publisher.home");
    Route::get('edit/{id}', 'PublisherController@edit')->name("publisher.edit");
    Route::post('update/{id}', 'PublisherController@update')->name("publisher.update");
});

Route::group(['middleware' => ['auth', 'authRoute'], 'namespace' => 'Subscriber', 'prefix' => 'subscriber'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('list', 'PostController@index')->name("subscriber.posts.list");
        Route::get('show/{id}', 'PostController@show')->name("subscriber.posts.show");
    });

    Route::group(['prefix' => 'congresses'], function () {
        Route::get('list', 'CongressController@index')->name("subscriber.congresses.list");
        Route::get('show/{id}', 'CongressController@show')->name("subscriber.congresses.show");
    });

    Route::group(['prefix' => 'events'], function () {
        Route::get('list', 'EventController@index')->name("subscriber.events.list");
        Route::get('show/{id}', 'EventController@show')->name("subscriber.events.show");
    });
    
    Route::get('', 'SubscriberController@index')->name("subscriber.home");
    Route::get('edit/{id}', 'SubscriberController@edit')->name("subscriber.edit");
    Route::post('update/{id}', 'SubscriberController@update')->name("subscriber.update");
});


Route::get('inscreva-se', 'Site\SiteController@subscribe')->name("subscribe")->middleware('authRoute');
Route::get('listCities/{idUF}', 'Site\SiteController@listCities')->name("listCities")->middleware('authRoute');
Route::get('login', 'Site\SiteController@doLogin')->name("site.login")->middleware('authRoute');

Route::post('check-user/{email}', 'UserController@checkUser')->name("check.user");
Route::post('login-validate', 'Site\SiteController@validateLogin')->name("site.login.validate");
Route::post('subscriber/store', 'Subscriber\SubscriberController@store')->name("subscriber.store");
Route::get('logout', 'Auth\LoginController@logout')->name('site.logout');
Route::get('/', 'Site\SiteController@index');


Route::get('/cc', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
