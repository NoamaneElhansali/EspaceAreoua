<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $guarded = [];
    protected $table = 'publications';


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function publication_ressources(){
        return $this->hasMany(PublicationRessource::class);
    }
}
