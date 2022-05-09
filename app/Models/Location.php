<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    public function whatAnimals(){
        return $this->hasMany('\App\Models\LocationAvailability', "address", "location");
    }

    public function searchMedia(){
        return $this->hasMany('\App\Models\LocationMedia', "address", "location");
    }

    public function ownedBy(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }
}
