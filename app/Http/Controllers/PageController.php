<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function movie() {
        $movies = Movie::all();
        return view('welcome' , compact('movies'));
    }
}
