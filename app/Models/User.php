<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Demande;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    protected $guarded = [];



    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }


    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function hasRole($role)
    {
        return $this->type_user === $role;
    }    
}
