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
    }
}
