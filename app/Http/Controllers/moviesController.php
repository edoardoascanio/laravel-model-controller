<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class moviesController extends Controller
{
    function getAllMovies() {
       $dataMovie = Movie::all();

        $dataView = [
          "moviesList" => $dataMovie
        ];

        dump($dataMovie);

        return view("movies", $dataView);
    }

    function singleMovie($id){
        $dataMovie = Movie::all();
 
        if(!is_numeric($id) || $id < 0 || $id > count($dataMovie) - 1){
            abort(404);
        }
    
        $movieSelected = $dataMovie[$id];
    
        return view('singleMovie', [
            "movie" => $movieSelected
        ]);
    } 
}


 