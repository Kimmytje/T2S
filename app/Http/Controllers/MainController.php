<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\KindOfAnimals;
use App\Models\Location;
use App\Models\LocationMedia;
use App\Models\Searching;
use App\Models\User;

class MainController extends Controller
{
    public function show(){
        $animals = Animals::all();
        $KOA = KindOfAnimals::all();
        $locations = Location::all();
        $locmedia = LocationMedia::all();
        $searching = Searching::all();
        $user = User::all();

        return view('home', [
            'animals' => $animals,
            'KOA' => $KOA,
            'locations' => $locations,
            'locmedia' => $locmedia,
            'searching' => $searching,
            'user' => $user,
        ]);
    }
}
