<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DiaChi;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonHangController extends Controller
{
    public function store(Request $request)
    {
        $khachHang  = Auth::guard('sanctum')->user();
        $dia_chi = DiaChi::where('id', $request->id_dia_chi)->where('id_khach_hang', $khachHang->id)->first();
        if (!$dia_chi) {
            return response()->json([
                'status' => false,
                'message' => "Địa chỉ chưa được chọn"
            ]);
        } else if (count($request->ds_mua_sp) < 1) {
            return response()->json([
                'status' => false,
                'message' => "Giỏ hàng chưa có sản phẩm"
            ]);
        } else {
            $newDonHang = DonHang::create([
                'ma_don_hang'           =>  'Em chưa có, chờ xíu',
                'id_khach_hang'         =>  $khachHang->id,
                'id_dia_chi'            =>  $request->id_dia_chi,
                'tong_tien'             =>  $request->tong_tien,
                'ma_code_giam'          =>  $request->ma_code_giam,
                'so_tien_giam'          =>  $request->so_tien_giam,
                'so_tien_thanh_toan'    =>  $request->so_tien_thanh_toan,
            ]);

            // Tới đây là đã có id đơn hàng => $newDonHang->id  => Update Mã Đơn Hàng
            $newDonHang->ma_don_hang    = 'DZBH' . (6072024 + $newDonHang->id);
            $newDonHang->save();

            // Cập Nhật Chi Tiết Đơn Hàng
            ChiTietDonHang::where('id_khach_hang', $khachHang->id)
                ->where('is_gio_hang', 1)
                ->update([
                    'is_gio_hang'   =>  0,
                    'id_don_hang'   =>  $newDonHang->id
                ]);

            // Gửi email tới khách hàng => Code sau khi đi bộ đội về

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Đã tạo đơn hàng ' . $newDonHang->ma_don_hang . ' thành công.'
            ]);
        }
    }
}
