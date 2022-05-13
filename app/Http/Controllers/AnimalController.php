<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use Auth;

class AnimalController extends Controller
{
    public function showSpecific($id){
        $user = Auth::user();

        $animal = Animals::where('animalID', $id)->first();

        $allMedia =  $animal->searchMedia;

        return view('animalDetail', [
            'user' => $user,

            'id' => $id,
            'animal' => $animal,
            'allMedia' => $allMedia,
        ]);
    }
}
