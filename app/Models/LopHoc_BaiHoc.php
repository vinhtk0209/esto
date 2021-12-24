<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHoc_BaiHoc extends Model
{
    protected $table = "lophoc_baihoc";
    protected $primaryKey = ['MABH', 'MALH'];  
    public $incrementing = false; 
    public $timestamps = false;
     
    public function rBaiHoc()
    {
        return $this->belongsTo('App\Models\BaiHoc', 'MABH');
    }

    public function rLopHoc()
    {
        return $this->belongsTo('App\Models\LopHoc', 'MALH');
    }
}
