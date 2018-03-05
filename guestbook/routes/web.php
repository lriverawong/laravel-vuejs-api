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

// Route::get('/', function () {
//     return view('welcome');
// });

// Root of website
Route::get('/', 'SignaturesController@index')->name('home');

// GET: /sign This page is responsible for displaying the form for creating a new signature.
Route::get('sign', 'SignaturesController@create')->name('sign');