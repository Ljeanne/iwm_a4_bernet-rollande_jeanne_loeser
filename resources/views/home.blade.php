@extends('template.app')

@section('content')

    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-wrap-movielist mv-grid-fw">

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                                @foreach($movies as $movie)
                                    @include('movieblock', compact($movie))
                                    {{--<ul>
                                        <li>{{$movie->id}}</li>
                                        <li>{{$movie->title}}</li>
                                        <li>{{$movie->release_date}}</li>
                                        <li>{{$movie->genre_ids[0]}}</li>
                                        <li>{{$movie->overview}}</li>
                                    </ul>
                                    <a href="{{route('movies.show', $movie->id)}}">
                                        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}">
                                    </a>
                                    <form method="POST" action="{{route('movies.store')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" value="{{$movie->id}}" name="movie_id">
                                        <input type="hidden" value="0" name="seen">
                                        <input type="hidden" value="{{$movie->genre_ids[0]}}" name="category">
                                        <button type="submit" class="btn btn-primary" value="Send">Ajouter à ma liste non vue</button>
                                    </form>
                                    <form method="POST" action="{{route('movies.store')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" value="{{$movie->id}}" name="movie_id">
                                        <input type="hidden" value="1" name="seen">
                                        <input type="hidden" value="{{$movie->genre_ids[0]}}" name="category">
                                        <button type="submit" class="btn btn-primary" value="Send">Déja vu</button>
                                    </form>--}}
                                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
