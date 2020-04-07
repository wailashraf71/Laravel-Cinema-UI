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
    return redirect('index');
});
Route::get('/index', function () {
    return view('movies');
});
Route::get('/tv', function () {
    return view('tv');
});
Route::get('/places', function () {
    return view('places');
});
Route::get('/account', function () {
    return view('account');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/movie/{id}', function () {
    return view('sub.movie_details');
});
Route::get('/movie/{id}/play', function () {
    return view('sub.play');
});
Route::get('/categories', function () {
    return view('sub.categories');
});
Route::get('/categories/{id}/details', function () {
    return view('sub.category_detail');
});
