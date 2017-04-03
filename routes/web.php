<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/codebrick', function () {
    return view('layouts.layout_codebrick');
});

Route::get('/{menuhead}/Lnb', 'LnbController@list');

Route::get('/{menuitem}/Main', 'MainController@index');

Route::get('/{menuitem}/Filtering', 'MainController@filtering');
