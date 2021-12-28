<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = "taikhoan";
    protected $primaryKey = "ID";
    public $timestamps = false;
    protected $casts = ['TRANGTHAI' => 'boolean', 'GIOITINH' => 'boolean'];
    protected $fillable = ['HOTEN', 'NGAYSINH', 'GIOITINH', 'ANHDAIDIEN', 'SODIENTHOAI', 'TRANGTHAI', 'EMAIL', 'TOKEN', 'MATKHAU', 'LOAITK', 'GOOGLE_ID', 'GOOGLE_REFRESH_TOKEN', 'GOOGLE_TOKEN'];

    public function rKhoaHoc()
    {
        return $this->hasMany('App\Models\KhoaHoc', 'ID');
    }

    public function rBaiThi()
    {
        return $this->hasMany('App\Models\BaiThi', 'ID');
    }
}