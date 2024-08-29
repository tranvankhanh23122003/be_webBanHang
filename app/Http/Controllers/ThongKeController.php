<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    public function thongKe1(Request $request)
    {
        $data = DanhMuc::join('san_phams', 'danh_mucs.id', 'san_phams.id_danh_muc')
                       ->whereDate('san_phams.created_at', ">=", $request->tu_ngay)
                       ->whereDate('san_phams.created_at', "<=", $request->den_ngay)
                       ->select('danh_mucs.ten_danh_muc', DB::raw("sum(san_phams.so_luong) as so_luong"))
                       ->groupBy('danh_mucs.ten_danh_muc')
                       ->get();

        return response()->json([
            'data'    =>  $data,
        ]);
    }
}
