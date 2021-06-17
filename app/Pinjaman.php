<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';

    protected $fillable = [
        'users_id', 'books_id', 'status', 'tgl_minjam', 'tgl_balikin'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function books()
    {
        return $this->belongsTo('App\Books');
    }
}
