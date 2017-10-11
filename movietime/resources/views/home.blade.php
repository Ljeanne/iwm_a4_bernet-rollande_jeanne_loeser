@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($movies as $movie)
                        <ul>
                            <li>{{$movie->id}}</li>
                            <li>{{$movie->title}}</li>
                            <li>{{$movie->title}}</li>
                        </ul>
                        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}">
                        @endforeach

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
