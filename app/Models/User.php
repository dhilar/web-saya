<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Kolom yang bisa diisi melalui mass assignment
    protected $fillable = ['name', 'email', 'password'];

    // Menyembunyikan password dan remember_token dari array atau JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Menambahkan casting untuk atribut tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
