<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searching extends Model
{
    protected $table = 'searching';

    public function searchRequester(){
        return $this->belongsTo('\App\Models\User', "owner", "accountID");
    }

    public function searchingFor(){
        return $this->belongsTo('\App\Models\Animals', "for", "animalID");
    }
}
