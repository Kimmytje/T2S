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
        $KOA = KindOfAnimals::all();
        $locations = Location::all();
        $searching = Searching::all();
        $user = Auth::user();

        return view('home', [
            'animals' => $animals,
            'KOA' => $KOA,
            'locations' => $locations,
            'searching' => $searching,
            'user' => $user,
        ]);
    }

    public function showAnimals(){
        $animals = Animals::all();
        $KOA = KindOfAnimals::all();
        $searching = Searching::all();
        $user = Auth::user();

        return view('animals', [
            'animals' => $animals,
            'KOA' => $KOA,
            'searching' => $searching,
            'user' => $user,
        ]);
    }

    public function showHomes(){
        $locations = Location::all();
        $KOA = KindOfAnimals::all();    
        $user = Auth::user();

        return view('homes', [
            'locations' => $locations,
            'KOA' => $KOA,
            'user' => $user,
        ]);
    }
}
