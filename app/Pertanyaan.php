<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul', 'isi', 'gambar', 'users_id', 'kategori_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'pertanyaan_id');
    }
}
