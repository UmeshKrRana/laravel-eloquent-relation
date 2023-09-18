<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index() {
        $countries = Country::with('states', 'cities')->get();
        return view('countries', compact('countries'));
    }
}
