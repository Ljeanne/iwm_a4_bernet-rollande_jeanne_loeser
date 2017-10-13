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
                <form method="POST" action="{{route('movies.store')}}" id="tosee{{ $movie->id }}">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$movie->id}}" name="movie_id">
                    <input type="hidden" value="0" name="seen">
                    <input type="hidden" value="{{$movie->genre_ids[0]}}" name="category">
                    {{--<button type="submit" class="" value="Send">Ajouter à ma liste non vue</button>--}}
                </form>
                <form method="POST" action="{{route('movies.store')}}" id="seen{{ $movie->id }}">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$movie->id}}" name="movie_id">
                    <input type="hidden" value="1" name="seen">
                    <input type="hidden" value="{{$movie->genre_ids[0]}}" name="category">
                    {{-- <button type="submit" class="" value="Send">Déja vu</button> --}}
                </form>
                <div class="social-btn">
                    <a href="" class="parent-btn tosee-btn" data-movie="{{ $movie->id }}"><i class="ion-heart"></i>I want to see this movie</a>
                </div>
                <div class="social-btn">
                    <a href="" class="parent-btn seen-btn" data-movie="{{ $movie->id }}"><i class="ion-eye-disabled"></i>I have seen this movie</a>
                </div>
            </div>
        </div>
    </div>
</div>
