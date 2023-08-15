<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class SearchController extends Controller
{
        public function show(Request $request)
        {
            $places = Place::search($request)->get();
            return view('list', compact('places'));
        }
}
