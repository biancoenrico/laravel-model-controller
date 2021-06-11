<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home(){
        $data = [
            'title'=> 'ciao'
        ];
        return view('home', $data);
    }

    public function movies(){

        $movies = Movie::all();
        // dd($movies);
        $data = [
            'movies' => $movies
        ];

        return view('movie', $data);
    }
}
