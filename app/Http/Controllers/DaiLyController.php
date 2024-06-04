<?php

namespace App\Http\Controllers;

use App\Models\DaiLy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaiLyController extends Controller
{
    public function getData()
    {
        $data = DaiLy::get(); //Nghia la lay ra

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        DaiLy::create([
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'so_dien_thoai' => $request->so_dien_thoai,
            'ngay_sinh' => $request->ngay_sinh,
            'password' => bcrypt($request->password),
            'ten_doanh_nghiep' => $request->ten_doanh_nghiep,
            'ma_so_thue' => $request->ma_so_thue,
            'dia_chi_kinh_doanh' => $request->dia_chi_kinh_doanh,

        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã tạo mới đại lý " . $request->ho_va_ten . " thành công.",
        ]);
    }
    public function destroy(Request $request)
    {
        //table danh mục tìm id = $request->id và sau đó xóa nó đi
        DaiLy::find($request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => "Đã xóa đại lý" . $request->ho_va_ten . " thành công.",
        ]);
    }
    public function checkSlug(Request $request)
    {
        $email = $request->email;
        $check = DaiLy::where('email', $email)->first();
        if ($check) {
            return response()->json([
                'status' => false,
                'message' => "Email này đã tồn tại.",
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => "Có thể thêm đại lý này.",
            ]);
        }
    }
    public function update(Request $request)
    {
        DaiLy::find($request->id)->update([
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'so_dien_thoai' => $request->so_dien_thoai,
            'ngay_sinh' => $request->ngay_sinh,
            'password' => $request->password,
            'ten_doanh_nghiep' => $request->ten_doanh_nghiep,
            'ma_so_thue' => $request->ma_so_thue,
            'dia_chi_kinh_doanh' => $request->dia_chi_kinh_doanh,
        ]);
        return response()->json([
            'status' => true,
            'message' => "Đã update đại lý" . $request->ho_va_ten . " thành công.",
        ]);
    }

    public function dangNhap(Request $request)
    {
        $check  =   Auth::guard('daily')->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        if ($check) {
            // Lấy thông tin tài khoản đã đăng nhập thành công
            $daiLy  =   Auth::guard('daily')->user(); // Lấy được thông tin đại lý đã đăng nhập

            return response()->json([
                'status'    => true,
                'message'   => "Đã đăng nhập thành công!",
                'token'     => $daiLy->createToken('token_dai_ly')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Tài khoản hoặc mật khẩu không đúng!",
            ]);
        }
    }
}
