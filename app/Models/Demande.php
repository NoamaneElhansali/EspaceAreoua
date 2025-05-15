<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $guarded = [];
    protected $table = 'demandes';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function facteur(){
        return $this->belongsTo(Facteur::class);
    }


    public function demande_ressources(){
        return $this->hasMany(DemandeRessource::class);
    }
}
