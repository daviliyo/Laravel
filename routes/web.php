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

Route::get('/', function()
{
    return view('home', array('name' => 'David'));
});

Route::get('auth/login', function ()
{
    return "Login usuario";
});

Route::get('auth/logout', function ()
{
    return "Logout usuario";
});

Route::get('catalog',function ()
{
    return "Listado películas";
});

Route::get('catalog/show/{id}', function ()
{
    return "Vista detalle película {id}";
});

Route::get('catalog/create', function ()
{
    return "Añadir película";
});

Route::get('catalog/edit/{id}', function ()
{
    return "Modificar película {id}";
});