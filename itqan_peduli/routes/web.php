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
Route::get('/inputpenyaluranDana', function () {
    return view('admin.isi.penyaluranDana.penyaluranDana');
});
Route::get('/inputhakLembaga', function () {
    return view('admin.isi.penyaluranDana.hakLembaga');
});
Route::get('/inputhakMediaBerbagi', function () {
    return view('admin.isi.penyaluranDana.hakMediaBerbagi');
});
Route::get('/inputupdateLaporan', function () {
    return view('admin.isi.penyaluranDana.updateLaporan');
});
Route::get('/inputkelolaSlider', function () {
    return view('admin.isi.webUtama.kelolaSlider');
});
Route::get('/inputkelolaPartner', function () {
    return view('admin.isi.webUtama.kelolaPartner');
});
Route::get('/inputwebKelolaKategori', function () {
    return view('admin.isi.webUtama.kelolaKategori');
});
Route::get('/inputkelolaBlog', function () {
    return view('admin.isi.webUtama.kelolaBlog');
});
Route::get('/inputkelolaKegiatan', function () {
    return view('admin.isi.webUtama.kelolaKegiatan');
});
Route::get('/inputkelolaUser', function () {
    return view('admin.isi.pengaturan.kelolaUser');
});
Route::get('/inputtambahBank', function () {
    return view('admin.isi.pengaturan.tambahBank');
});
Route::get('/inputkelolaNotifikasi', function () {
    return view('admin.isi.pengaturan.kelolaNotifikasi');
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