<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/catalog', function() {
    return "this is a catalog";
});

Route::get('/about', function() {
    return "this is about page";
});

Route::get('/contacts', function() {
    return "this is a contacts page";
});

Route::get('/sale', function() {
    return "this is a sale page";
});

Route::get('/work', function() {
    return "this is work page";
});

Route::get('/settings', function() {
    return "this is a settings page";
});

Route::get('/wiki', function() {
    return "this is a wiki page";
});

Route::get('/portfolio', function() {
    return "this is a portfolio page";
});
