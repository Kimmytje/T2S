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

        return $locations;

        return view('admin', [
            'locations' => $locations,
            'user' => $user,
        ]);
    }
}
