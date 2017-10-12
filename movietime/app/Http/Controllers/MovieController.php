<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Affiche la liste des films à regarder, puis la liste des films vus (Pages "Mes films")
        $user = Auth::user();
        if ($user)
        {
            $movies = Movie::all();
            return view('movie.index', compact('movies'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'movie_id' => 'required',
            'category' => 'required',
        ],
            [
                'movie_id.required' => 'Un film doit être ajouté est requis.',
                'category.required' => 'Une categorie est requise.',
            ]);
        Movie::create([
            'user_id' => Auth::user()->id,
            'movie_id' => $request->movie_id,
            'category' => $request->category,
            'seen' => $request->seen,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $id)
    {
        $movie = Movie::find($id);
        // Récupérer string dans l'API
        $client = new GuzzleHttp\Client();
        $res = $client->get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=14549aeb10d953e4b4868c68a1955393');
        //echo $res->getStatusCode(); // 200
        $movies = $res->getBody();
        $movies = GuzzleHttp\json_decode($movies);
        $movies = $movies->results;


        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        //
    }
}
