<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\Searching;
use Auth;

class AnimalController extends Controller
{
    public function showSpecific($id){
        $user = Auth::user();

        $search = Searching::where('id', $id)->first();

        $animal = $search->searchingFor()->first();

        $allMedia =  $animal->searchMedia;

        return view('animalDetail', [
            'user' => $user,

            'id' => $id,
            'search' => $search,
            'animal' => $animal,
            'allMedia' => $allMedia,
        ]);
    }
}
