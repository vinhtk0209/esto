<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = "danhmuc";
    protected $primaryKey = 'MADM';
    public $timestamps = false;
    protected $fillable = ['TENDM', 'MADMCHA', 'ACTIVE'];
    public function childCategory()
    {
        return $this->hasMany(DanhMuc::class, 'MADMCHA');
    }

    public function rKhoaHoc()
    {
        return $this->hasMany('App\Models\KhoaHoc', 'MADM');
    }
}