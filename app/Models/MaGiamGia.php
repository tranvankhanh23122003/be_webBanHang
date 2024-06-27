<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaGiamGia extends Model
{
    use HasFactory;

    protected $table = "ma_giam_gias";
    
    protected $fillable = [
        'ma_code',
        'tinh_trang',
        'bat_dau',
        'ket_thuc',
        'loai_giam',
        'so_tien_toi_da',
    ];
}
