<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLP extends Model
{
    use HasFactory;

    // Tentukan nama tabel agar Laravel gak auto-convert jadi `p_l_p_s`
    protected $table = 'plps'; // ganti ini sesuai nama tabel yang kamu buat di database

    protected $fillable = ['nama', 'nip', 'posisi'];
}
