<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    public $table = 'makanans';

    public $fillable = [
        'nama_makanan',
        'harga_makanan',
        'rating_makanan'
    ];
}