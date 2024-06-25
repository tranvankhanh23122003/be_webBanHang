<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChiTietDonHangController extends Controller
{
    public function store(Request $request)
    {
        $khachHang  = Auth::guard('sanctum')->user();
        $sanPham    = SanPham::find($request->id);
        // Có đầy đủ thông tin của sản phẩm cần thêm vào giỏ hàng
        $chiTiet    = ChiTietDonHang::where('id_san_pham', $sanPham->id)
                                    ->where('id_khach_hang', $khachHang->id)
                                    ->where('is_gio_hang', 1)
                                    ->first();
        if($chiTiet) {
            $chiTiet->so_luong      =   $chiTiet->so_luong + $request->so_luong_mua;
            $chiTiet->thanh_tien    =   $chiTiet->so_luong * $chiTiet->don_gia;
            $chiTiet->save();
        } else {
            ChiTietDonHang::create([
                'id_san_pham'       =>  $sanPham->id,
                'id_khach_hang'     =>  $khachHang->id,
                'id_dai_ly'         =>  $sanPham->id_dai_ly,
                'don_gia'           =>  $sanPham->gia_khuyen_mai,
                'so_luong'          =>  $request->so_luong_mua,
                'thanh_tien'        =>  $sanPham->gia_khuyen_mai * $request->so_luong_mua,
                'ten_san_pham'      =>  $sanPham->ten_san_pham,
            ]);
        }

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đã thêm vào giỏ hàng thành công'
        ]);
    }
}
