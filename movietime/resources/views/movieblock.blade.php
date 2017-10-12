<div class="col-md-3">
    {{--
        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}" class="img img-responsive" style="width: 100%">
    --}}
    <div class="movieblock"  style="width: 100%;height: 500px;background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}')">
        <div class="movieinfo" style="/*background: red;width: 100%;height: 100%;position: absolute;*/">
            <ul>
                <li>{{$movie->id}}</li>
                <li>{{$movie->title}}</li>
                <li>{{$movie->release_date}}</li>
            </ul>
        </div>
    </div>
</div>