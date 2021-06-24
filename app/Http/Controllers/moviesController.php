<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class moviesController extends Controller
{
    public function getAllMovies () {
        $datiMovies = Movie::all();

        $datiView = [
            "moviesList" => $datiMovies
        ];

        
        return view("moviesList", $datiView);
    }

    public function getSingleMovie($id){
        $datiMovies = config("movies");
 
        if(!is_numeric($id) || $id < 0 || $id > count($datiMovies) - 1){
            abort(404);
        }
    
        $movieSelected = $datiMovies[$id];
    
        return view('singleMovie', [
            "movie" => $movieSelected
        ]);
    }
}
