<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationRessource extends Model
{
    protected $guarded = [];
    protected $table = 'publication_ressources';

    public function publication(){
        return $this->belongsTo(Publication::class);
    }
}
