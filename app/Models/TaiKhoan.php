<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = "taikhoan";
    protected $primaryKey = "ID";
    protected $casts = ['TRANGTHAI' => 'boolean', 'GIOITINH' => 'boolean'];
    protected $fillable = ['HOTEN', 'NGAYSINH', 'GIOITINH', 'ANHDAIDIEN', 'SODIENTHOAI', 'TRANGTHAI', 'EMAIL', 'TOKEN', 'MATKHAU', 'LOAITK', 'GOOGLE_ID', 'GOOGLE_REFRESH_TOKEN', 'GOOGLE_TOKEN'];

    public function rLoaiTK()
    {
        return $this->hasMany('App\Models\LoaiTK', 'MALOAI');
    }
    public function rChungChi()
    {
        return $this->hasMany('App\Models\ChungChi', 'MACHUNGCHI');
    }
    public function rCTLopHoc()
    {
        return $this->hasMany('App\Models\CTLopHoc', 'ID');
    }

    public function rBaiThi()
    {
        return $this->hasMany('App\Models\BaiThi', 'ID');
    }

    public function rBaiLam()
    {
        return $this->hasMany('App\Models\BaiLam', 'ID');
    }
}
