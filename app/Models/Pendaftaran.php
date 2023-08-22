<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'nama_ayah',
        'no_ayah',
        'nama_ibu',
        'no_ibu',
        'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
