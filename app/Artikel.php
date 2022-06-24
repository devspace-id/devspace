<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul', 'gambar', 'isi', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}
