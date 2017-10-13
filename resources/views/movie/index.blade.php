@extends('template.app')

@section('title')
    My movies
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2>Liste des films non vues</h2>
            @foreach($moviesNotSeen as $movie)
                <div class="col-md-3 isolatedmovie">
                    {{--
                        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}" class="img img-responsive" style="width: 100%">
                    --}}
                    <div class="movieblock col-md-12" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie['movie']->poster_path}}');background-size:cover" data-id="{{ $movie['movie']->id }}">
                        <div class="movieinfo row movieinfo{{ $movie['movie']->id }}" style="opacity: 0;height: 0;">
                            <div class="infos col-md-12">
                                <h3>{{$movie['movie']->title}}</h3>
                                <p class="released_date">Released {{$movie['movie']->release_date}}</p>
                                <p>{{ substr($movie['movie']->overview, 0, 200) }} <a href="">(read more)</a></p>
                            </div>
                            <div class="btn col-md-12">

                                @include('forms.editmovie', ['movie' => $movie, 'seen' => 1, 'button' => 'I have seen this movie', 'picto' => 'ion-eye-disabled'])
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div>
                <h2>Liste des films vues</h2>
                @foreach($moviesSeen as $movie)
                    <div class="col-md-3 isolatedmovie">
                        {{--
                            <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}" class="img img-responsive" style="width: 100%">
                        --}}
                        <div class="movieblock col-md-12" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie['movie']->poster_path}}');background-size:cover" data-id="{{ $movie['movie']->id }}">
                            <div class="movieinfo row movieinfo{{ $movie['movie']->id }}" style="opacity: 0;height: 0;">
                                <div class="infos col-md-12">
                                    <h3>{{$movie['movie']->title}}</h3>
                                    <p class="released_date">Released {{$movie['movie']->release_date}}</p>
                                    <p>{{ substr($movie['movie']->overview, 0, 200) }} <a href="">(read more)</a></p>
                                </div>
                                <div class="btn col-md-12">

                                    @include('forms.editmovie', ['movie' => $movie, 'seen' => 0, 'button' => 'I want to see this movie', 'picto' => 'ion-heart']))
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection