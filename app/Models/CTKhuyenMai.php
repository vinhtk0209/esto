<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTKhuyenMai extends Model
{
    protected $table = "ctkhuyenmai";
    protected $primaryKey = ['MAKH', 'MAKM'];
    public $incrementing = false;
    public $timestamps = false;

    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }

    public function rKhuyenMai()
    {
        return $this->belongsTo('App\Models\KhuyenMai', 'MAKM');
    }
}
