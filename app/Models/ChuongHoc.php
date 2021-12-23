<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuongHoc extends Model
{
<<<<<<< HEAD
    use HasFactory;
    protected $table = "chuonghoc";
    protected $primaryKey = "MACHUONG";
    public $timestamps = false;
    protected $fillable = ['TENCHUONG', 'MAKH'];

    public function rBaiHoc()
    {
        return $this->hasMany('App\Models\BaiHoc', 'MACHUONG');
    }
=======
    protected $table = "chuonghoc";
    protected $primaryKey = "MACHUONG";
    public $timestamps = false;

>>>>>>> ba8a0328bff9d9d1b76f7253bfea2863ffc4d85c
    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }
<<<<<<< HEAD
=======

    public function rBaiHoc()
    {
        return $this->hasMany('App\Models\BaiHoc', 'MACHUONG');
    }
>>>>>>> ba8a0328bff9d9d1b76f7253bfea2863ffc4d85c
}
