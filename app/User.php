<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi dengan model
    public function profil()
    {
        return $this->hasOne('App\Profil', 'users_id');
    }

    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'users_id');
    }

    public function pertanyaan()
    {
        return $this->hasMany('App\Pertanyaan', 'users_id');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'users_id');
    }
}
