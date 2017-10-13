<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp;
use Illuminate\Support\Facades\DB;


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
        $movies = DB::table('movies')->where('user_id', '=', $user->id)->get();

        $client = new GuzzleHttp\Client();
        $moviesNotSeen = [];
        $moviesSeen = [];

        foreach ($movies as $movie){
            $dbMovie = $movie;
            $res = $client->get('http://api.themoviedb.org/3/movie/' . $movie->movie_id . '?api_key=14549aeb10d953e4b4868c68a1955393');
            $movie = $res->getBody();
            $movie = GuzzleHttp\json_decode($movie);

            if($dbMovie->seen) {
                $moviesSeen[] = ['movie' => $movie, 'dbMovie' => $dbMovie];
            }else{
                $moviesNotSeen[] = ['movie' => $movie, 'dbMovie' => $dbMovie];
            }
        }
        return view('movie.index', ['moviesSeen' => $moviesSeen,'moviesNotSeen' => $moviesNotSeen,]);
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
        $this->validate($request, [
                'movie_id' => 'required',
                'category' => 'required',
            ],
            [
                'movie_id.required' => 'Un film doit être ajouté est requis.',
                'category.required' => 'Une categorie est requise.',
            ]
        );

        if (!Auth::user()) {
            return "You have to be logged to use that feature.";
        }

        $existingMovie = Movie::where('user_id', Auth::user()->id)
            ->where('movie_id', $request->movie_id)
            ->first();
        return count($existingMovie);
        if (count($existingMovie) > 0 ) {
            $this->update($request, $existingMovie->id);
        } else {
            Movie::create([
                'user_id' => Auth::user()->id,
                'movie_id' => $request->movie_id,
                'category' => $request->category,
                'seen' => $request->seen,
                'favorite' => $request->favorite
            ]);
        }



        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->get('http://api.themoviedb.org/3/movie/' . $id . '?api_key=14549aeb10d953e4b4868c68a1955393');
        $movie = $res->getBody();
        $movie = GuzzleHttp\json_decode($movie);

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
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('movies.index');
    }


}
