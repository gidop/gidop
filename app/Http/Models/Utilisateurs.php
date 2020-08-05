<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    protected $fillable = ['nom','prenom', 'email'];
}
