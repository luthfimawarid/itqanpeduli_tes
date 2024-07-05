<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.isi.dashboard');
});

Route::get('/dana', function () {
    return view('admin.isi.dana');
});

Route::get('/home', function () {
    return view('user.home.index');
});

Route::get('/akun', function () {
    return view('user.akun.index');
});

Route::get('/dutaamal', function () {
    return view('user.akun.dutaAmal');
});