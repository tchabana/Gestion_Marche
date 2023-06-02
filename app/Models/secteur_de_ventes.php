<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secteur_de_ventes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomsecteur',
        'nbrplaces',
    ];
}