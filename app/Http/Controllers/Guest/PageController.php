<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function movies() {
        $movies = Movies::all();
        return view('movies', compact('movies'));
    }
}
