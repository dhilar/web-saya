<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    use HasFactory;

    // Tentukan kolom mana yang bisa diisi
    protected $fillable = [
        'title', 
        'description', 
        'image_1', 
        'image_2', 
        'image_3', 
        'image_4', 
        'feature_1', 
        'feature_2', 
        'feature_3',
    ];
}
