<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.isi.dashboard');
});

Route::get('/dana', function () {
    return view('admin.isi.dana');
});