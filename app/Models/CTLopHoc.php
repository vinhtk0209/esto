<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTLopHoc extends Model
{
    protected $table = "ctlophoc";
    protected $primaryKey = "MAHV";
    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan', 'MAHV');
    }
    public function rLopHoc()
    {
        return $this->belongsTo('App\Models\LopHoc', 'MALH');
    }
}
