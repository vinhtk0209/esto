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

    public function rDanhMuc()
    {
        return $this->belongsTo('App\Models\DanhMuc', 'MADM');
    }
}
