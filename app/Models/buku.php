<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    public $table = 'bukus';

    public $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit'
    ];
}
