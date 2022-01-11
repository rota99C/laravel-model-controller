<?php

namespace App\Http\Controllers;

use App\Movie; # <-- Import the model ⚡
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Add an index method to manage requests from the / route
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
