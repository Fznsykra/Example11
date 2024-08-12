<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardMatakuliahController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardJabatanController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/eksporpdf-mahasiswa',[MahasiswaController::class,'export_pdf']);
Route::get('/eksporpdf-prodi',[ProdiController::class,'export_pdf']);

Route::get('/dosen',[DosenController::class,'index']);
Route::get('/prodi',[ProdiController::class,'index']);



Route::resource('/dashboard-mahasiswa', DashboardMahasiswaController::class)->middleware('auth');
Route::resource('/dashboard-matakuliah', DashboardMatakuliahController::class)->middleware('auth');
Route::resource('/dashboard-jabatan', DashboardJabatanController::class)->middleware('auth');
Route::resource('/dashboard-dosen', DashboardDosenController::class)->middleware(['auth','admin']);
Route::resource('/dashboard-prodi', DashboardProdiController::class)->middleware('auth');
Route::resource('/dashboard-user', DashboardUserController::class)->middleware('auth');

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

