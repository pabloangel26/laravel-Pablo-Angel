<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;

class LoginUser extends Authenticatable implements MustVerifyEmailContract
{
    use Notifiable;

    // Nombre de la tabla en la base de datos
    protected $table = 'loginusers';

    // Atributos que son asignables en masa
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Atributos que deben estar ocultos para los arreglos
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Los atributos que deberían ser convertidos a tipos de datos nativos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
