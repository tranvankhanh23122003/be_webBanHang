<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaiLy extends Model
{
    use HasFactory;

    protected $table = 'dai_lys';

    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'ngay_sinh',
        'password',
        'ten_doanh_nghiep',
        'ma_so_thue',
        'dia_chi_kinh_doanh',
        'is_active',
    ];
}
