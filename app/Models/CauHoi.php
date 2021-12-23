<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = "cauhoi";
    public $timestamps = false;

    public function rCTBaiThi()
    {
        return $this->hasMany('App\Models\CTBaiThi', 'MACH');
    }
     
    public function rDanhMuc()
    {
        return $this->belongsTo('App\Models\DanhMuc', 'MADM');
    }

    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\LopHoc', 'MAGV');
    }
}
