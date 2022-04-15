<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = "lophoc";    
    public $timestamps = false;
    protected $primaryKey = 'MALH';
    protected $dates = ['NGAYMOLOP'];

    public function rLopHoc_BaiHoc()
    {
        return $this->hasMany('App\Models\LopHoc_BaiHoc', 'MALH');
    }
    public function rCTLopHoc()
    {
        return $this->hasMany('App\Models\CTLopHoc', 'MALH');
    }

    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }
<<<<<<< HEAD
    
=======
    public function rCTLopHoc()
    {
        return $this->hasMany('App\Models\CTLopHoc', 'MALH');
    }
>>>>>>> 0674c9facc37fb67b57f1ee78c36aa41f4c5f37f
}
