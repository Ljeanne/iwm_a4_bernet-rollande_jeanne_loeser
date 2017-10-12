<div class="col-md-3 isolatedmovie">
    {{--
        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}" class="img img-responsive" style="width: 100%">
    --}}
    <div class="movieblock col-md-12" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}');background-size:cover">
        <div class="movieinfo row">
            <div class="infos col-md-12">
                <h3>{{$movie->title}}</h3>
                <p class="released_date">Released {{$movie->release_date}}</p>
                <p>{{ substr($movie->overview, 0, 200) }} <a href="">(read more)</a></p>
            </div>
            <div class="btn col-md-12">
                <button>TO SEE</button>
                <button>SEEN</button>
                <div class="social-btn">
                    <a href="#" class="parent-btn"><i class="ion-heart"></i>I want to see this movie</a>
                </div>
                <div class="social-btn">
                    <a href="#" class="parent-btn"><i class="ion-eye-disabled"></i>I have seen this movie</a>
                </div>
            </div>
        </div>
    </div>
</div>
