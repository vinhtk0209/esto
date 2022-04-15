<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTBaiThi extends Model
{
    protected $table = "ctbaithi";
    protected $primaryKey = ['MACH', 'MABT'];  
    public $incrementing = false; 
    public $timestamps = false;
     
    public function rCauHoi()
    {
        return $this->belongsTo('App\Models\CauHoi', 'MACH');
    }

    public function rBaiThi()
    {
        return $this->belongsTo('App\Models\BaiThi', 'MABT');
    }
}
