<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'namaP', 'deskripsi', 'stok', 'harga','berat','foto'
    ];
}
