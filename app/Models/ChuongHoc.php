<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuongHoc extends Model
{
    protected $table = "chuonghoc";
    protected $primaryKey = "MACHUONG";
    public $timestamps = false;

    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }

    public function rBaiHoc()
    {
        return $this->hasMany('App\Models\BaiHoc', 'MACHUONG');
    }
}
