<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jabatan', 'image', 'facebook_link', 'twitter_link', 'instagram_link'];
}
