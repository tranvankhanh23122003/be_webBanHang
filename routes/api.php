<?php

use App\Http\Controllers\ChiTietDonHangController;
use App\Http\Controllers\DaiLyController;
use App\Http\Controllers\DaiLyNhapKhoController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DiaChiController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\SanPhamDaiLyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/danh-muc/data-open',[DanhMucController::class, 'getDataOpen']);
Route::get('/danh-muc',[DanhMucController::class, 'getData'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc',[DanhMucController::class, 'store'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc/delete',[DanhMucController::class,'destroy'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc/checkSlug',[DanhMucController::class,'checkSlug'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc-update',[DanhMucController::class,'update'])->middleware("NhanVienMiddle");
Route::post('/admin/danh-muc/doi-trang-thai',[DanhMucController::class,'changeStatus'])->middleware("NhanVienMiddle");

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
Route::post('/admin/dai-ly/doi-trang-thai',[DaiLyController::class,'changeStatus'])->middleware("NhanVienMiddle");

Route::get('/admin/nhan-vien/data',[NhanVienController::class, 'getData'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/create',[NhanVienController::class, 'store'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/delete',[NhanVienController::class,'destroy'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/check-mail',[NhanVienController::class,'checkMail'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/update',[NhanVienController::class,'update'])->middleware("NhanVienMiddle");
Route::post('/admin/nhan-vien/doi-trang-thai',[NhanVienController::class,'changeStatus'])->middleware("NhanVienMiddle");

Route::get('/admin/khach-hang/data', [KhachHangController::class, 'dataKhachHang'])->middleware("NhanVienMiddle");
Route::post('/admin/khach-hang/kich-hoat-tai-khoan', [KhachHangController::class, 'kichHoatTaiKhoan'])->middleware("NhanVienMiddle");
Route::post('/admin/khach-hang/doi-trang-thai', [KhachHangController::class, 'doiTrangThaiKhachHang'])->middleware("NhanVienMiddle");
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'updateTaiKhoan'])->middleware("NhanVienMiddle");
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'deleteTaiKhoan'])->middleware("NhanVienMiddle");

Route::get('/admin/profile/data', [NhanVienController::class, 'getDataProfile'])->middleware("NhanVienMiddle");
Route::post('/admin/profile/update', [NhanVienController::class, 'updateProfile'])->middleware("NhanVienMiddle");

Route::get('/dai-ly/san-pham/data', [SanPhamDaiLyController::class,'getData'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/san-pham/create',[SanPhamDaiLyController::class,'store'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/san-pham/delete', [SanPhamDaiLyController::class,'xoaSP'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/san-pham/update',[SanPhamDaiLyController::class,'update'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/san-pham/chuyen-trang-thai-ban',[SanPhamDaiLyController::class,"chuyenTrangThaiBan"])->middleware("DaiLyMiddle");

Route::post('/dai-ly/nhap-kho/create',[DaiLyNhapKhoController::class,'store'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/nhap-kho/delete',[DaiLyNhapKhoController::class,'destroy'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/nhap-kho/update',[DaiLyNhapKhoController::class,'update'])->middleware("DaiLyMiddle");
Route::get('/dai-ly/nhap-kho/data-nhap',[DaiLyNhapKhoController::class,'getData'])->middleware("DaiLyMiddle");

Route::post('/nhan-vien/dang-nhap', [NhanVienController::class, 'dangNhap']);
Route::post('/dai-ly/dang-nhap', [DaiLyController::class, 'dangNhap']);
Route::post('/dai-ly/dang-ky', [DaiLyController::class, 'dangKy']);
Route::get('/dai-ly/profile/data', [DaiLyController::class, 'getDataProfile'])->middleware("DaiLyMiddle");
Route::post('/dai-ly/profile/update', [DaiLyController::class, 'updateProfile'])->middleware("DaiLyMiddle");

Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'dangNhap']);
Route::post('/khach-hang/dang-ky', [KhachHangController::class, 'dangKy']);
Route::get('/khach-hang/profile/data', [KhachHangController::class, 'getDataProfile'])->middleware("KhachHangMiddle");
Route::post('/khach-hang/profile/update', [KhachHangController::class, 'updateProfile'])->middleware("KhachHangMiddle");
Route::get('/khach-hang/dia-chi/data', [DiaChiController::class, 'getData'])->middleware("KhachHangMiddle");
Route::post('/khach-hang/dia-chi/create', [DiaChiController::class, 'store'])->middleware("KhachHangMiddle");
Route::post('/khach-hang/dia-chi/update', [DiaChiController::class, 'update'])->middleware("KhachHangMiddle");
Route::post('/khach-hang/dia-chi/delete', [DiaChiController::class, 'destroy'])->middleware("KhachHangMiddle");

Route::post('/khach-hang/gio-hang/create', [ChiTietDonHangController::class, 'store'])->middleware("KhachHangMiddle");


Route::get('/kiem-tra-admin', [NhanVienController::class, 'kiemTraAdmin']);
Route::get('/kiem-tra-daily', [DaiLyController::class, 'kiemTraDaiLy']);
Route::get('/kiem-tra-khachhang', [KhachHangController::class, 'kiemTraKhachHang']);

Route::get('/chi-tiet-san-pham/{id}', [SanPhamController::class, 'layThongTinSanPham']);
Route::get('/thong-tin-san-pham-tu-danh-muc/{id}', [SanPhamController::class, 'layThongTinSanPhamTuDanhMuc']);
Route::get('/dai-ly-san-pham/{id}', [SanPhamController::class, 'layThongTinSanPhamDaiLy']);
