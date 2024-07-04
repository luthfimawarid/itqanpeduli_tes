<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.utama.index');
});

Route::get('/home', function () {
    return view('user.home.index');
});
