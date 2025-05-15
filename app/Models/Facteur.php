<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facteur extends Model
{
    protected $guarded = [];
    protected $table = 'facteurs';

    public function demande(){
        return $this->hasOne(Demande::class);
    }
}
