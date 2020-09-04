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
    return view('login\index');
});
Route::get('/home', function () {
    return view('home\index');
});

Route::get('/decentralized', function () {
    return view('decentralized\index');
});
Route::get('/message', function () {
    return view('message\index');
});
Route::get('/account', function () {
    return view('account\index');
});
Route::get('/assessment', function () {
    return view('assessment\index');
});
