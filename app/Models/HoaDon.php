<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $primaryKey = 'MAHD';
    public $timestamps = false;
    protected $table = "hoadon";
    protected $fillable = ['MAHD', 'MAHV'];
}