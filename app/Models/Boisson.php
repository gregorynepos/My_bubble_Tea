<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'ingredients',
        'categorie',
        'prix',
        'description',
        'images', 
    ];

    protected $guarded = [
        'id',
    ];
}
