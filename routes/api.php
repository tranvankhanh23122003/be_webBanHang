<?php

use App\Http\Controllers\DaiLyController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/danh-muc/data-open',[DanhMucController::class, 'getDataOpen']);
Route::get('/danh-muc',[DanhMucController::class, 'getData'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc',[DanhMucController::class, 'store'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc/delete',[DanhMucController::class,'destroy'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc/checkSlug',[DanhMucController::class,'checkSlug'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc-update',[DanhMucController::class,'update'])->middleware("NhanVienMiddle");

Route::get('/san-pham/data-flash-sale', [SanPhamController::class,'getDataFlashSale']);
Route::get('/san-pham/data-noi-bat', [SanPhamController::class,'getDataNoiBat']);
Route::get('/san-pham/data-new', [SanPhamController::class,'getDataNew']);
Route::get('/san-pham', [SanPhamController::class,'getData'])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham',[SanPhamController::class,'store'])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham/delete', [SanPhamController::class,'xoaSP'])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham-sua',[SanPhamController::class,'update'])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham/checkSlug',[SanPhamController::class,"checkSlug"])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham/chuyen-trang-thai-ban',[SanPhamController::class,"chuyenTrangThaiBan"])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham/chuyen-noi-bat',[SanPhamController::class,"chuyenNoiBat"])->middleware("NhanVienMiddle");
Route::post('/admin/san-pham/chuyen-flash-sale',[SanPhamController::class,"chuyenFlashSale"])->middleware("NhanVienMiddle");

Route::get('/admin/dai-ly/data',[DaiLyController::class, 'getData'])->middleware("NhanVienMiddle");
Route::post('/admin/dai-ly/create',[DaiLyController::class, 'store'])->middleware("NhanVienMiddle");
Route::post('/admin/dai-ly/delete',[DaiLyController::class,'destroy'])->middleware("NhanVienMiddle");
Route::post('/admin/dai-ly/check-mail',[DaiLyController::class,'checkMail'])->middleware("NhanVienMiddle");
Route::post('/admin/dai-ly/update',[DaiLyController::class,'update'])->middleware("NhanVienMiddle");

Route::get('/admin/nhan-vien/data',[NhanVienController::class, 'getData'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/create',[NhanVienController::class, 'store'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/delete',[NhanVienController::class,'destroy'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/check-mail',[NhanVienController::class,'checkMail'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/update',[NhanVienController::class,'update'])->middleware("NhanVienMiddle");

Route::post('/nhan-vien/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::post('/dai-ly/dang-nhap', [DaiLyController::class, 'dangNhap']);

Route::get('/kiem-tra-admin', [NhanVienController::class, 'kiemTraAdmin']);
