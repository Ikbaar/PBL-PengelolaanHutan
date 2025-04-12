<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;

    protected $table = 'sejarahs'; // Opsional, kalau nama tabel sama dengan model (plural), bisa dihapus
    protected $fillable = ['konten'];
}
