<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    public $timestamps = false;
    protected $table = "danhgia";
    protected $fillable = ['MAHV', 'MAKH', 'SOSAO', 'NOIDUNG', 'NGAYDG'];
    public function rTaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan', 'MAHV');
    }
    public function rKhoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'MAKH');
    }
}