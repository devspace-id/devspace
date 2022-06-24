<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['pertanyaan_id', 'users_id', 'isi'];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'pertanyaan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}
