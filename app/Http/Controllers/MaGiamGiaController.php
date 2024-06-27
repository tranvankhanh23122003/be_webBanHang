<?php

namespace App\Http\Controllers;

use App\Models\MaGiamGia;
use Illuminate\Http\Request;

class MaGiamGiaController extends Controller
{
    public function getData(){
        $data = MaGiamGia::get(); //Nghia la lay ra

        return response()->json([
            'data' => $data
        ]);
    }

    public function store(Request $request){
        MaGiamGia::create([
            'ma_code'           => $request->ma_code,
            'tinh_trang'        => $request->tinh_trang,
            'bat_dau'           => $request->bat_dau,
            'ket_thuc'          => $request->ket_thuc,
            'loai_giam'         => $request->loai_giam,
            'so_tien_toi_da'    => $request->so_tien_toi_da,

        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới mã giảm giá ". $request->ma_code . " thành công.",
        ]);
    }
    public function destroy(Request $request){
        //table danh mục tìm id = $request->id và sau đó xóa nó đi
        MaGiamGia::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa mã giảm giá". $request->ma_code . " thành công.",
        ]);
    }
    
    public function update(Request $request){
        MaGiamGia::find($request->id)->update([
            'ma_code'           => $request->ma_code,
            'tinh_trang'        => $request->tinh_trang,
            'bat_dau'           => $request->bat_dau,
            'ket_thuc'          => $request->ket_thuc,
            'loai_giam'         => $request->loai_giam,
            'so_tien_toi_da'    => $request->so_tien_toi_da,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã update mã giảm giá". $request->ma_code . " thành công.",
        ]);
    }
    public function changeStatus(Request $request)
    {
        $maGiamGia = MaGiamGia::where('id', $request->id)->first();

        if($maGiamGia) {
            if($maGiamGia->tinh_trang == 0) {
                $maGiamGia->tinh_trang = 1;
            } else {
                $maGiamGia->tinh_trang = 0;
            }
            $maGiamGia->save();

            return response()->json([
                'status'    => true,
                'message'   => "Đã cập nhật trạng thái mã giảm giá thành công!"
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Mã giảm giá không tồn tại!"
            ]);
        }
    }
}
