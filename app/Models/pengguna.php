<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'pengguna';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'id_akses',
        'nama_pengguna',
        'nama_depan',
        'nama_belakang',
        'no_hp',
        'alamat',
        'email',
        'password',
        'alamat',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     protected $hidden = [
         'password',
         'remember_token',
     ];

    /**
        * The attributes that should be cast to native types.
        *
        * @var array
        */
    
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
