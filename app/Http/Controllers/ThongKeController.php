<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ThongKeController extends Controller
{
    public function thongke(Request $request)
    {
        $data = DanhMuc::join('san_phams', 'danh_mucs.id', 'san_phams.id_danh_muc')
            ->whereDate('san_phams.created_at', '>=', $request->tu_ngay)
            ->whereDate('san_phams.created_at', '<=', $request->den_ngay)
            ->select('danh_mucs.ten_danh_muc', DB::raw('Count(san_phams.ten_san_pham) as so_luong'))
            ->groupBy('danh_mucs.ten_danh_muc')
            ->get();

        $array_danh_muc = [];
        $array_so_luong = [];

        foreach ($data as $key => $value) {
            array_push($array_danh_muc, $value->ten_danh_muc);
            array_push($array_so_luong, $value->so_luong);
        }

        return response()->json([
            'data'           => $data,
            'ten_danh_muc'   => $array_danh_muc,
            'so_luong'       => $array_so_luong
        ]);
    }
    public function thongke2(Request $request)
    {
        $data = DanhMuc::join('san_phams', 'danh_mucs.id', 'san_phams.id_danh_muc')
            ->whereDate('san_phams.created_at', '>=', $request->tu_ngay)
            ->whereDate('san_phams.created_at', '<=', $request->den_ngay)
            ->select('danh_mucs.ten_danh_muc', DB::raw('Sum(san_phams.so_luong) as so_luong'))
            ->groupBy('danh_mucs.ten_danh_muc')
            ->get();

        $array_danh_muc = [];
        $array_so_luong = [];

        foreach ($data as $key => $value) {
            array_push($array_danh_muc, $value->ten_danh_muc);
            array_push($array_so_luong, $value->so_luong);
        }

        return response()->json([
            'data'           => $data,
            'ten_danh_muc'   => $array_danh_muc,
            'so_luong'       => $array_so_luong
        ]);
    }
}
