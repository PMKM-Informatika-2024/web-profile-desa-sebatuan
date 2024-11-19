<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/beranda');
});
Route::get('/profile-desa', function () {
    return view('user/profile-desa');
});
Route::get('/perangkat-desa', function () {
    return view('user/perangkat-desa');
});
Route::get('/kegiatan', function () {
    return view('user/kegiatan');
});
Route::get('/kontak', function () {
    return view('user/kontak');
});
Route::get('/layanan-administrasi', function () {
    return view('user/layanan-administrasi');
});
Route::get('/layanan-publik', function () {
    return view('user/layanan-publik');
});
Route::get('/fasilitas-pendidikan', function () {
    return view('user/fasilitas-pendidikan');
});
Route::get('/lembaga-desa', function () {
    return view('user/lembaga-desa');
});
Route::get('/pemerintahan-desa', function () {
    return view('user/pemerintahan-desa');
});
Route::get('/pengumuman', function () {
    return view('user/pengumuman');
});
Route::get('/struktur-pemerintahan', function () {
    return view('user/struktur-pemerintahan');
});


