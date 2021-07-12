<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function movies() {

        $movies = Movie::all();
        return view('movie', compact('movies'));
    }
    
}
