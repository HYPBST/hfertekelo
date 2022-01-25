<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feladat extends Model
{
    use HasFactory;
    protected $fillable = ['szoveges_ertekeles', 'pontszam'];

    protected $visible = [
        'id',
        'nev',
        'feladat_url',
        'szoveges_ertekeles',
        'pontszam',
    ];
}
