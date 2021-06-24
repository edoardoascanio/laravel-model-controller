<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        
        $dataMovie = [
          "movies" => Movie::all()
        ];

        return view("home", $dataMovie);
    }
}
