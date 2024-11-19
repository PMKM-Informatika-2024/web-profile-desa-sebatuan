<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/beranda');
});
Route::get('/profile_desa', function () {
    return view('user/profile-desa');
});
Route::get('/perangkat_desa', function () {
    return view('user/perangkat-desa');
});

