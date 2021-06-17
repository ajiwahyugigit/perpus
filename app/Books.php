<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'foto', 'kode', 'judul', 'penulis', 'penerbit', 'tahun'
    ];
}
