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
    protected $fillable = ['TENKH', 'ANH', 'DONGIA', 'GIOITHIEUKH', 'CHITIETKH', 'MAGV', 'MADM'];


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


    public function rLop($id)
    {
        return $this->hasMany('App\Models\LopHoc', 'MAKH')->where('MAKH', '=', $id);
    }

    public function rCTHoaDon()
    {
        return $this->hasMany('App\Models\CTHoaDon', 'MAKH');
    }

    public function scopeSearch($query)
    {
        if(request('key')){
            $key = request('key');
            $query=$query->where('TENKH','like','%'.$key.'%');
        }
        if(request('catID')){
            $query=$query->where('MADM',request('catID'));
        }
      return $query;
    }
}