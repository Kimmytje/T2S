<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Auth;

class LocationController extends Controller
{
    public function showSpecific($address){
        $user = Auth::user();

        $address = str_replace("%20", "", $address);
        $location = Location::where('address', $address)->first();
        $allMedia =  $location->searchMedia;

        return view('homeDetails', [
            'user' => $user,

            'address' => $address,
            'location' => $location,
            'allMedia' => $allMedia,
        ]);
    }

    public function showContact($address){
        $user = Auth::user();

        $address = str_replace("%20", "", $address);
        $location = Location::where('address', $address)->first();

        return view('contactForm', [
            'user' => $user,

            'address' => $address,
            'location' => $location,
        ]);
    }
}
