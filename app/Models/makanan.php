<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $fillable = [
        'nama_makanan',
        'harga_makanan',
        'rating_makanan',
    ];
}
