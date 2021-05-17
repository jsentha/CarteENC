<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteEtudiant extends Model
{
    use HasFactory;

    // CarteEtudiant peut avoir qu'une seul utilisateur
    public function user()
    {
        return $this->belongsTo('App\Models\User' ,'user_id' );
    }
}
