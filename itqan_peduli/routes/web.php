<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.isi.dashboard');
});

Route::get('/dana', function () {
    return view('admin.isi.dana');
});

Route::get('/penyaluran', function () {
    return view('admin.isi.penyaluran');
});

Route::get('/lembaga', function () {
    return view('admin.isi.lembaga');
});

Route::get('/mediaberbagi', function () {
    return view('admin.isi.mediaberbagi');
});

Route::get('/berita', function () {
    return view('admin.isi.berita');
});

Route::get('/kategori', function () {
    return view('admin.isi.kategori');
});

Route::get('/fundraiser', function () {
    return view('admin.fundraiser.fundraiser');
});

Route::get('/leaderboard', function () {
    return view('admin.fundraiser.leaderboard');
});

Route::get('/transaksifundraiser', function () {
    return view('admin.fundraiser.transaksi');
});

Route::get('/inputpenggalanganDana', function () {
    return view('admin.isi.publikasiProgram.pengalanganDana');
});
Route::get('/inputprogramZakat', function () {
    return view('admin.isi.publikasiProgram.programZakat');
});
Route::get('/inputprogramWakaf', function () {
    return view('admin.isi.publikasiProgram.programWakaf');
});
Route::get('/inputprogramQurban', function () {
    return view('admin.isi.publikasiProgram.programQurban');
});
Route::get('/inputkelolaKategori', function () {
    return view('admin.isi.pengaturanProgram.kelolaKategori');
});
Route::get('/inputdonasiManual', function () {
    return view('admin.isi.transaksi.donasiManual');
});


// User
Route::get('/home', function () {
    return view('user.home.index');
});

Route::get('/akun', function () {
    return view('user.akun.index');
});

Route::get('/dutaamal', function () {
    return view('user.akun.dutaAmal');
});