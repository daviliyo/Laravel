<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','HomeController@getHome');

Route::get('auth/login', function ()
{
    return view('login');
});

Route::get('auth/logout', function ()
{
    return "Logout usuario";
});

Route::get('catalog','CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create','CatalogController@getCreate');

Route::get('catalog/edit/{id}','CatalogController@getEdit');