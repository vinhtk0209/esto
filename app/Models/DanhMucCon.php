<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucCon extends Model
{
    protected $table = "danhmuccon";
    protected $guarded = [];
    public function childCategory()
    {
        return $this->hasMany(DanhMuc::class, 'MADM');
    }
}