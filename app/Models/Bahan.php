<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;
    
    protected $table = 'soto'; // Nama tabel yang digunakan adalah 'soto'

    protected $fillable = [
        'nama',
        'nis',
        'nisn',
        'gender',
        'alamat',
    ];
}
