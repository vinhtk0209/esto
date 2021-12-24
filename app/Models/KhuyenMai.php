<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = "khuyenmai";
    protected $primaryKey = 'MAKM';
    //protected $casts = ['MATT'=>'boolean'];
    public $timestamps = false;
    

    public function rCTKhuyenMai()
    {
        return $this->hasMany('App\Models\CTKhuyenMai', 'MAKM');
    }
}
