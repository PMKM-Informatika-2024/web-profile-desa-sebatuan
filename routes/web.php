<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfildesaController;
use App\Http\Controllers\PerangkatdesaController;
use App\Http\Controllers\LembagadesaController;
use App\Http\Controllers\LayananpublikController;
use App\Http\Controllers\LayananadministrasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KelolakegiatanController;
use App\Http\Controllers\KelolakontakController;
use App\Models\Perangkatdesa;
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
Route::get('/adminlogin', [LoginController::class, 'index'])->middleware('guest');
Route::post('/adminlogin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/admin', function(){
    return view('admin/admin-dashboard');
})->middleware('auth');
Route::resource('/adminprofildesa', ProfildesaController::class)->middleware('auth');
Route::resource('/adminperangkatdesa', PerangkatdesaController::class)->middleware('auth');
Route::resource('/adminlembagadesa', LembagadesaController::class)->middleware('auth');
Route::resource('/adminlayananpublik', LayananpublikController::class)->middleware('auth');
Route::resource('/adminlayananadministrasi', LayananadministrasiController::class)->middleware('auth');
Route::resource('/adminpengumuman', PengumumanController::class)->middleware('auth');
Route::resource('/adminkegiatan', KelolakegiatanController::class)->middleware('auth');
Route::resource('/adminkontak', KelolakontakController::class)->middleware('auth');