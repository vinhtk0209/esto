<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiHoc extends Model
{
    protected $table = "baihoc";
    protected $primaryKey = 'MABH';
    public $timestamps = false;
    protected $casts = ['HOCTHU' => 'boolean'];

<<<<<<< HEAD
     // public function rKhoaHoc()
    // {
    //     return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    // }
=======
    public function rChuongHoc()
    {
        return $this->belongsTo('App\Models\ChuongHoc', 'MACHUONG');
    }
>>>>>>> ba8a0328bff9d9d1b76f7253bfea2863ffc4d85c

    public function rLopHoc_BaiHoc()
    {
        return $this->hasMany('App\Models\LopHoc_BaiHoc', 'MABH');
    }

    public function rChuongHoc()
    {
        return $this->belongsTo('App\Models\ChuongHoc', 'MACHUONG');
    }
}