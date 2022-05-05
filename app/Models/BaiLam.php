<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiLam extends Model
{
    protected $table = "bailam";
    protected $primaryKey = 'MABL';    
    protected $casts = ['ACTIVE' => 'boolean'];
    public $timestamps = false;
     
    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan', 'MAHV');
    }

    public function rBaiThi()
    {
        return $this->belongsTo('App\Models\BaiThi', 'MABT');
    }

    public function rCTBaiLam()
    {
        return $this->hasMany('App\Models\CTBaiLam', 'MABL');
    }
}
