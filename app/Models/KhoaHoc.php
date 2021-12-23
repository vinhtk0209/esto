<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhoaHoc extends Model
{
    protected $table = "khoahoc";
    protected $primaryKey = 'MAKH';
    public $timestamps = false;
    protected $casts = ['TRUCTUYEN' => 'boolean'];

    public function rDanhMuc()
    {
        return $this->belongsTo('App\Models\DanhMuc', 'MADM');
    }

    public function rBaiHoc()
    {
        return $this->hasMany('App\Models\BaiHoc', 'MAKH');
    }

    public function rLopHoc()
    {
        return $this->hasMany('App\Models\LopHoc', 'MAKH');
    }

    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan', 'MAGV');
    }

    public function rChuongHoc()
    {
        return $this->hasMany('App\Models\ChuongHoc', 'MAKH');
    }
}
