<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Add an index method to manage requests from the / route
    public function index()
    {
        return view('home');
    }
}
