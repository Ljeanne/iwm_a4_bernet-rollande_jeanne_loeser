@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h1>Résultat de la recherche - {{ $string ? $string : ''  }}</h1>

                    @if($movies)
                        <ul>
                            @foreach($movies as $movie)
                                <li>{{ $movie->title }}</li>
                            @endforeach
                        </ul>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection