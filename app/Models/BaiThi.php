<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiThi extends Model
{
    protected $table = "baithi";
    protected $primaryKey = "MABT";
    public $timestamps = false;

    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan', 'MAGV');
    }

    public function rCTBaiThi()
    {
        return $this->hasMany('App\Models\CTBaiThi', 'MABT');
    }

    public function rBaiLam()
    {
        return $this->hasMany('App\Models\BaiLam', 'MABT');
    }
}
