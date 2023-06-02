<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commercants extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'datenaiss',
        'quartier',
        'tel',
        'email',
        'ville',
        'idagent',
    ];
}