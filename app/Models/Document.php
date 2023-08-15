<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_kk',
        'no_nik',
        'address',
        'photo_kk',
        'nama_bapak',
        'nama_ibu',
        'asal_sekolah',
        'alasan_masuk'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
