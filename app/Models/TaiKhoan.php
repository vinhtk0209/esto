<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = "taikhoan";

    protected $fillable = ['HOTEN', 'NGAYSINH', 'GIOITINH', 'SODIENTHOAI', 'EMAIL', 'MATKHAU', 'MALOAI'];
}
