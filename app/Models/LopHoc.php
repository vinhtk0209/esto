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

    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }
    public function rCTLopHoc()
    {
        return $this->hasMany('App\Models\CTLopHoc', 'MALH');
    }
}
