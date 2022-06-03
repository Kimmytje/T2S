<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Auth;

class AdminController extends Controller
{
    public function show(){
        $locations = Location::all();
        $user = Auth::user();

        return $locations; //Dit skipt ie dus hij komt niet in deze controller terecht, krijg wel laravel errors als ik iet van een foreach loop erin wil zetten met deze var

        return view('admin', [
            'locations' => $locations,
            'user' => $user,
        ]);
    }
}
