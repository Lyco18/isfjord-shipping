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
    return view('pages/home');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/contact', 'ContactController@show');

Route::post('/contact',  'ContactController@mailToAdmin');

Route::get('/malmo', function () {
    return view('pages/malmo');
});

Route::get('/gallery', 'GalleryController@show');

Route::get('/gallery/{tag}', 'GalleryController@showTag');

Route::get('/options', function () {
    return view('pages/options');
});

Route::get('/charter', function () {
    return view('pages/charter');
});
