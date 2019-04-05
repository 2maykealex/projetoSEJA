<?php

Route::group(['namespace' => 'Site', 'prefix' => '/'], function () {
    // Route::get('home', 'SiteController@index')->name("site.home");
});

Route::get('/', function () {
    return view('index');
});
