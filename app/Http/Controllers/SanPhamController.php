<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function getData(){
        $data = SanPham::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request){
        SanPham::create([
            'ten_san_pham'  =>$request->ten_san_pham,
            'slug_san_pham'  =>$request->slug_san_pham,
            'so_luong'   =>$request->so_luong,
            'hinh_anh'   =>$request->hinh_anh,
            'mo_ta_ngan'   =>$request->mo_ta_ngan,
            'mo_ta_chi_tiet'   =>$request->mo_ta_chi_tiet,
            'tinh_trang'  =>$request->tinh_trang,
            'gia_ban'  =>$request->gia_ban,
            'gia_khuyen_mai'  =>$request->gia_khuyen_mai,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã thêm mới sản phẩm". $request->ten_san_pham . " thành công.",
        ]);
    }
    public function checkSlug(Request $request){
        $slug = $request->slug_san_pham;
        $check = SanPham::where('slug_san_pham', $slug)->first();
        if($check){
            return response()->json([
                'status' => false,
                'message' => "Slug này đã tồn tại.",
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => "Có thể thêm danh mục này.",
            ]);
        }
    }
    public function update(Request $request){
        SanPham::find($request->id)->update([
            'ten_san_pham'  =>$request->ten_san_pham,
            'slug_san_pham'  =>$request->slug_san_pham,
            'so_luong'   =>$request->so_luong,
            'hinh_anh'   =>$request->hinh_anh,
            'mo_ta_ngan'   =>$request->mo_ta_ngan,
            'mo_ta_chi_tiet'   =>$request->mo_ta_chi_tiet,
            'tinh_trang'  =>$request->tinh_trang,
            'gia_ban'  =>$request->gia_ban,
            'gia_khuyen_mai'  =>$request->gia_khuyen_mai,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã sửa đổi thông tin ". $request->ten_san_pham . " thành công.",
        ]);
    }
    public function xoaSP(Request $request){
        SanPham::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa sản phẩn". $request->ten_san_pham . " thành công.",
        ]);
    }
}
