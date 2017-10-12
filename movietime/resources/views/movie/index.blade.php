@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12 panel">
        <h1>To do list</h1>
          <p>Liste des films vues</p>
          <ul>
            @foreach($movies as $movie)
                @if($movie->seen)
                    <li>{{$movie->user_id}}</li>
                    <li>{{$movie->movie_id}}</li>

                    <li>Cool</li>
                  @endif
            @endforeach
        </ul>
          <p>Liste des films non vues</p>
          <ul>
              @foreach($movies as $movie)
                  @if($movie->seen)@else
                      <li>{{$movie->user_id}}</li>
                      <li>{{$movie->movie_id}}</li>

                      <li>Cool</li>
                  @endif
              @endforeach
          </ul>
      </div>
    </div>
  </div>
@endsection