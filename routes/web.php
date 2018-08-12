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
//     return view('pages.index');
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });

// Route::get('/portfolio', function () {
//     return view('pages.portfolio');
// });

// Route::get('/contact', function () {
//     return view('pages.contact');
// });
//for checking
// Route::get('/check/{id}', function ($id) {
//     return $id;
// });
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/services', 'PagesController@services');
Route::get('/admin', 'PagesController@admin');