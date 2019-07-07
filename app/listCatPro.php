<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listCatPro extends Model
{
    protected $fillable = [
        'idProduk', 'idKategori',
    ];
}
