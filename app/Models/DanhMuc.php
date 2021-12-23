<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = "danhmuc";
    protected $primaryKey = 'MADM';

    protected $guarded = [];
    
    public function rKhoaHoc()
    {
        return $this->hasMany('App\Models\KhoaHoc', 'MADM');

    public $timestamps = false;
    protected $fillable = ['TENDM', 'MADMCHA', 'GIOITHIEUDM', 'CHITIETDM', 'ACTIVE'];
    public function childCategory()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Models\DanhMuc', 'MADMCHA');
=======
        return $this->hasMany(DanhMuc::class, 'MADMCHA');

>>>>>>> ba8a0328bff9d9d1b76f7253bfea2863ffc4d85c
    }

    public function rKhoaHoc()
    {
        return $this->hasMany('App\Models\KhoaHoc', 'MADM');
    }
}