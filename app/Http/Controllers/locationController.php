<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function showAll(){
        return Location::all();
    }

    public function showSpecific($address){
        return Location::where('address', $address)->first()->media;
    }
}
