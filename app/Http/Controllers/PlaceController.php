<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    //
    public function index(){
        return view('welcome' , ['places'=>Place::orderBy('view_count', 'desc')->take(3)->get()]);
    }
}
