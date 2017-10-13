@extends('template.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h1>Results for "{{ $string ? $string : ''  }}" ({{ count($movies) }} results displayed)</h1>
            </div>
            <div class="flex-wrap-movielist mv-grid-fw">

                    @if($movies)
                        @foreach($movies as $movie)
                            @include('movieblock', compact($movie))
                        @endforeach
                    @endif

            </div>
        </div>
    </div>

@endsection