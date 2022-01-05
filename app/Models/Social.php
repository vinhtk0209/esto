<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $table = 'social';
    public $timestamps = false;
    protected $fillable = [
        'PROVIDER-USER-ID',  'PROVIDER',  'USER', 'PROVIDER-USER-EMAIL'
    ];

    protected $primaryKey = 'USER-ID';
    public function customer()
    {
        return $this->belongsTo('App\Models\Taikhoan', 'USER');
    }
}