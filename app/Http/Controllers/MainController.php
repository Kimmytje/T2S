<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\AnimalsMedia;
use App\Models\KindOfAnimals;
use App\Models\Location;
use App\Models\LocationMedia;
use App\Models\Searching;
use App\Models\User;
use Auth;

class MainController extends Controller
{
    public function show(){
        $animals = Animals::all();
        $animalmeida = AnimalsMedia::all();
        $KOA = KindOfAnimals::all();
        $locations = Location::all();
        $locmedia = LocationMedia::all();
        $searching = Searching::all();
        $user = Auth::user();

        return view('home', [
            'animals' => $animals,
            'animalsmedia' => $animalmeida,
            'KOA' => $KOA,
            'locations' => $locations,
            'locmedia' => $locmedia,
            'searching' => $searching,
            'user' => $user,
        ]);
    }
}
