<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    //pour autoriser l'entrer de toute les champs de la table
    protected $guarded = [];

    
    public function clients(){

        return $this->hasMany('App\Models\Client'); 
    }

    
}
