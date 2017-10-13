@extends('template.app')

@section('title')
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="flex-wrap-movielist mv-grid-fw">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach($movies as $movie)
                    @include('movieblock', compact($movie, $views))
                @endforeach

            </div>
        </div>
    </div>
@endsection
