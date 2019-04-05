<?php

Route::group(['namespace' => 'Site', 'prefix' => '/'], function () {
    Route::get('', 'SiteController@index')->name("site.home");
    Route::get('contatos', 'SiteController@contact')->name("site.contatos");
    Route::get('quem-somos', 'SiteController@whoWeare')->name("site.quemsomos");
    Route::get('onde-estamos', 'SiteController@whereWeAre')->name("site.localizacao");
    Route::get('login', 'SiteController@doLogin')->name("site.login");
    Route::get('inscreva-se', 'SiteController@subscribe')->name("site.subscribe");
});

// Route::get('/', function () {
//     return view('index');
// });
