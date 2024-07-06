<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaGiamGiaSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ma_giam_gias')->delete();

        DB::table('ma_giam_gias')->truncate();

        DB::table('ma_giam_gias')->insert([
            [
                'code' => 'DISCOUNT01',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-07-01',
                'ngay_ket_thuc' => '2024-07-31',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 10,
                'so_tien_toi_da' => 100000,
                'don_hang_toi_thieu' => 50000,
            ],
            [
                'code' => 'DISCOUNT02',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-06-15',
                'ngay_ket_thuc' => '2024-07-15',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 20,
                'so_tien_toi_da' => 200000,
                'don_hang_toi_thieu' => 100000,
            ],
            [
                'code' => 'DISCOUNT03',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-06-20',
                'ngay_ket_thuc' => '2024-07-20',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 15,
                'so_tien_toi_da' => 150000,
                'don_hang_toi_thieu' => 75000,
            ],
            [
                'code' => 'DISCOUNT04',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-06-05',
                'ngay_ket_thuc' => '2024-07-25',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 30,
                'so_tien_toi_da' => 300000,
                'don_hang_toi_thieu' => 150000,
            ],
            [
                'code' => 'DISCOUNT05',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-06-07',
                'ngay_ket_thuc' => '2024-07-18',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 25,
                'so_tien_toi_da' => 250000,
                'don_hang_toi_thieu' => 125000,
            ],
            [
                'code' => 'DISCOUNT06',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-06-12',
                'ngay_ket_thuc' => '2024-07-12',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 35,
                'so_tien_toi_da' => 350000,
                'don_hang_toi_thieu' => 175000,
            ],
            [
                'code' => 'DISCOUNT07',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-06-08',
                'ngay_ket_thuc' => '2024-07-22',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 40,
                'so_tien_toi_da' => 400000,
                'don_hang_toi_thieu' => 200000,
            ],
            [
                'code' => 'DISCOUNT08',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-06-03',
                'ngay_ket_thuc' => '2024-07-17',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 45,
                'so_tien_toi_da' => 450000,
                'don_hang_toi_thieu' => 225000,
            ],
            [
                'code' => 'DISCOUNT09',
                'tinh_trang' => 1,
                'ngay_bat_dau' => '2024-06-11',
                'ngay_ket_thuc' => '2024-07-19',
                'loai_giam_gia' => 0,
                'so_giam_gia' => 50,
                'so_tien_toi_da' => 500000,
                'don_hang_toi_thieu' => 250000,
            ],
            [
                'code' => 'DISCOUNT10',
                'tinh_trang' => 0,
                'ngay_bat_dau' => '2024-06-14',
                'ngay_ket_thuc' => '2024-07-14',
                'loai_giam_gia' => 1,
                'so_giam_gia' => 55,
                'so_tien_toi_da' => 550000,
                'don_hang_toi_thieu' => 275000,
            ],
        ]);
    }
}
