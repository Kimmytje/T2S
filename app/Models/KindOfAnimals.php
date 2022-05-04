<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfAnimals extends Model
{
    protected $table = 'kind_of_animals';

    public function allAnimals(){
        $this->hasMany('\App\Models\Animals', "kind", "kind");
    }
}
