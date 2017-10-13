<div class="col-md-3 isolatedmovie">
    {{--
        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}" class="img img-responsive" style="width: 100%">
    --}}
    <div class="movieblock col-md-12" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}');background-size:cover" data-id="{{ $movie->id }}">
        <div class="movieinfo row movieinfo{{ $movie->id }}" style="opacity: 0;height: 0;">
            <div class="infos col-md-12">
                <h3>{{$movie->title}}</h3>
                <p class="released_date">Released {{$movie->release_date}}</p>
                <p>{{ substr($movie->overview, 0, 200) }} <a href="{{ URL::to('/movies/'.$movie->id) }}">(read more)</a></p>
            </div>
            <div class="btn col-md-12">

                @include('forms.addmovie', ['movie' => $movie, 'seen' => 0, 'button' => 'I want to see this movie', 'picto' => 'ion-heart']))
                @include('forms.addmovie', ['movie' => $movie, 'seen' => 1, 'button' => 'I have seen this movie', 'picto' => 'ion-eye-disabled'])
            </div>
        </div>
    </div>
</div>
