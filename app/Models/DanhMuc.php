<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = "danhmuc";
    protected $primaryKey = 'MADM';
    public $timestamps = false;
    protected $fillable = ['TENDM', 'MADMCHA', 'GIOITHIEUDM', 'CHITIETDM', 'ACTIVE'];
    protected $guarded = [];

    public function rKhoaHoc()
    {
        return $this->hasMany('App\Models\KhoaHoc', 'MADM');
    }

    public function rCauHoi()
    {
        return $this->hasMany('App\Models\CauHoi', 'MADM');
    }

    public function childCategory()
    {
        return $this->hasMany('App\Models\DanhMuc', 'MADMCHA');
    }
}