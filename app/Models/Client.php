<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //Les champs qu'on autorise a remplir
    //protected $fillable = ['name','email','status'];

    protected $guarded = [];

    //doner des valeurs par défaut aux attributs
    protected $attributes = [
        'status' => 0 
    ];

    //methode qui comporte une requete (dans le ClientsController elle s'appelle status [Client::satatus()])
    public function scopeStatus($query){

       return $query->where('status',1)->get();
    }

    //chaque client appartient a une entreprise
    public function entreprise(){

        return $this->belongsTo('App\Models\Entreprise');
    }

    //un getteur pour transformer les données d'un attributs
    public function getStatusAttribute($attributes){
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions(){

        return [
            '0'=>'Inactif',
            '1'=>'Actif',
            '3'=>'En attente'
        ];
    }
}
 