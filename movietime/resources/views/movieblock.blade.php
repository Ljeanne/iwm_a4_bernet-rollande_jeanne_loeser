<div class="col-md-3">
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
                    <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                    <div class="hover-bnt">
                        <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                        <div class="hvr-item">
                            <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                            <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                            <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                            <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
