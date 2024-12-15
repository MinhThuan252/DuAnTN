<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sanpham', [HomeController::class, 'sanpham'])->name('sanpham');
// Route::get('/sanpham/search', [HomeController::class,'search'])->name('sanpham.search');
Route::get('/sptl/{id}', [HomeController::class, 'sp_trongloai','danhmuc'])->name('sptl');
Route::get('/chitietsp/{id}', [HomeController::class, 'chitiet_sp'])->name('spct');
Route::get('/giohang', [HomeController::class, 'giohang']);
Route::get('/thanhtoan', [HomeController::class, 'thanhtoan']);

use App\Http\Controllers\UserController;
Route::get('/dangnhap',[UserController::class,'dangnhap'])->name('login');
Route::post('/dangnhap', [UserController::class,'dangnhap_']);
Route::get('/thoat', [UserController::class,'thoat']);
Route::get('/download', [SanPhamController::class,'download'])->middleware('auth');
Route::get('/dangky', [UserController::class,'dangky']);
Route::post('/dangky', [UserController::class,'dangky_']);
Route::get('/camon', [UserController::class,'camon']);
