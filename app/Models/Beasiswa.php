<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'batas_pendaftaran'];
    protected $casts = [
    'batas_pendaftaran' => 'datetime',
];

}
