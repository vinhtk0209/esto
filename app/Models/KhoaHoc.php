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

    public function rChuongHoc()
    {
        return $this->hasMany('App\Models\ChuongHoc', 'MAKH');
    }

    public function rLopHoc()
    {
        return $this->hasMany('App\Models\LopHoc', 'MAKH');
    }

    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan', 'MAGV');
    }

<<<<<<< HEAD
    public function rChuongHoc()
    {
        return $this->hasMany('App\Models\ChuongHoc', 'MAKH');
=======
    public function rLop($id)
    {
        return $this->hasMany('App\Models\LopHoc', 'MAKH')->where('MAKH', '=', $id);
>>>>>>> ba8a0328bff9d9d1b76f7253bfea2863ffc4d85c
    }
}
