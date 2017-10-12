@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h1>Résultat de la recherche - {{ $string ? $string : ''  }}</h1>
                    <div class="row">

                        @if($movies)
                            @foreach($movies as $movie)
                                @include('movieblock', compact($movie))
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection