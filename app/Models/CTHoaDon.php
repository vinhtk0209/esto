<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTHoaDon extends Model
{
    public $timestamps = false;
    protected $table = "cthoadon";
    protected $fillable = ['MAHD', 'MAKH','MALH'];

    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }
}