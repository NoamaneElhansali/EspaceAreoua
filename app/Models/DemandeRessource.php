<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeRessource extends Model
{
    protected $guarded = [];
    protected $table = 'demande_ressources';

    public function demande(){
        return $this->belongsTo(Demande::class);
    }
}
