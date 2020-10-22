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
Route::get('/index', function () {
    return view("index");
});
Route::get('/profil', function () {
    return view("profil");
});
Route::get('/product', function () {
    return view("product");
});
Route::get('/transaksi', function () {
    return view("transaksi");
});
Route::get('/login', function () {
    return view("login");
});