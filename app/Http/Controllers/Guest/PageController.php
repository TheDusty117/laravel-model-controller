<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

//aggiungi questo per i model
use App\Models\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {

        //qui vado ad utilizzare il database dei Movies tramite i Models
        //qui dico dammi tutti i film
        $movies = Movie::all(); //SELECT * FROM movies
        //provo dump die per vedere cosa mi restituisce
        // dd($movies);

        $data = [
            'movies' => $movies
        ];

        return view('welcome', $data);

    }
}
