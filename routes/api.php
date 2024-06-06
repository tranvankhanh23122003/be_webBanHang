<?php

use App\Http\Controllers\DaiLyController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/danh-muc',[DanhMucController::class, 'getData']);
Route::post('/admin/danh-muc',[DanhMucController::class, 'store']);
Route::post('/admin/danh-muc/delete',[DanhMucController::class,'destroy']);
Route::post('/admin/danh-muc/checkSlug',[DanhMucController::class,'checkSlug']);
Route::post('/admin/danh-muc-update',[DanhMucController::class,'update']);

Route::get('/san-pham', [SanPhamController::class,'getData']);
Route::post('/admin/san-pham',[SanPhamController::class,'store']);
Route::post('/admin/san-pham/delete', [SanPhamController::class,'xoaSP']);
Route::post('/admin/san-pham-sua',[SanPhamController::class,'update']);
Route::post('/admin/san-pham/checkSlug',[SanPhamController::class,"checkSlug"]);

Route::get('/admin/dai-ly/data',[DaiLyController::class, 'getData']);
Route::post('/admin/dai-ly/create',[DaiLyController::class, 'store']);
Route::post('/admin/dai-ly/delete',[DaiLyController::class,'destroy']);
Route::post('/admin/dai-ly/check-mail',[DaiLyController::class,'checkMail']);
Route::post('/admin/dai-ly/update',[DaiLyController::class,'update']);

Route::get('/admin/nhan-vien/data',[NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/create',[NhanVienController::class, 'store']);
Route::post('/admin/nhan-vien/delete',[NhanVienController::class,'destroy']);
Route::post('/admin/nhan-vien/check-mail',[NhanVienController::class,'checkMail']);
Route::post('/admin/nhan-vien/update',[NhanVienController::class,'update']);

Route::post('/nhan-vien/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::post('/dai-ly/dang-nhap', [DaiLyController::class, 'dangNhap']);
