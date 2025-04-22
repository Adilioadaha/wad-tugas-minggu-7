<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Tabel yang digunakan
    protected $table = 'produk';

    // Kolom yang dapat diisi
    protected $fillable = ['nama', 'harga'];
}
