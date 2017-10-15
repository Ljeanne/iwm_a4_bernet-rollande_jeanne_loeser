<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use GuzzleHttp;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Affiche la page d'accueil : suggestions, films récents...

        // Récupérer string dans l'API
        $client = new GuzzleHttp\Client();
        $res = $client->get('http://api.themoviedb.org/3/discover/movie?%20%E2%86%B5%20sort_by=popularity.desc?&api_key=14549aeb10d953e4b4868c68a1955393');
        $movies = $res->getBody();
        $movies = GuzzleHttp\json_decode($movies);
        $movies = $movies->results;

        $views = [];

        $user = Auth::user();

        if ($user !== NULL) {
            $knownmovies = Movie::where('user_id', Auth::user()->id)
                ->get();

            foreach ($knownmovies as $movie) {
                $views[$movie->movie_id] = $movie->seen;
            }
        }

        //dd($views);
        return view('home', ['movies' => $movies, 'views' => $views]);
    }
}
