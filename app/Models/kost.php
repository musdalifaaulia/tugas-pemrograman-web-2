<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kost extends Model
{
    /** @use HasFactory<\Database\Factories\KostFactory> */
    use HasFactory;
    protected $fillable = [
    'nama_kost',
    'alamat',
    'harga_per_bulan',
    'fasilitas',
    'kontak'
];
}
