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

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/malmo', function () {
    return view('pages/malmo');
});

Route::get('/gallery', function () {
    return view('pages/gallery');
});

Route::get('/options', function () {
    return view('pages/options');
});

Route::get('/charter', function () {
    return view('pages/charter');
});
