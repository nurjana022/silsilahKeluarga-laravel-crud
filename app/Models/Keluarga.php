<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $fillable = [
        'nama_keluarga',
        'tanggal_lahir',
        'jenis_kelamin',
        'pekerjaan',
    ];
}
