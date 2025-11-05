<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // Authenticatable da la funcionalidad de autenticación
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Campos que no deben exponerse en arrays/json (por ejemplo al hacer User::all())
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // convierte automáticamente el campo email_verified_at a tipo datetime
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
