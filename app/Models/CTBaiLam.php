<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTBaiLam extends Model
{
    protected $table = "ctbailam";
    protected $primaryKey = 'MACT';  
    public $timestamps = false;
     
    public function rBaiLam()
    {
        return $this->belongsTo('App\Models\BaiLam', 'MABL');
    }
}
