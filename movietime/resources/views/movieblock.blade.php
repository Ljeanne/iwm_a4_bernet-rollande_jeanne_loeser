<div class="col-md-3">
    {{--
        <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}" class="img img-responsive" style="width: 100%">
    --}}
    <div class="movieblock col-md-12" style="width: 100%;height: 300px;background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}');">
        <div class="movieinfo row" style="background: rgba(0,0,0,0.7);width: 100%;height: 100%;position: absolute;bottom: 0;color: #FFF;">
            <ul>
                <li>{{$movie->id}}</li>
                <li>{{$movie->title}}</li>
                <li>{{$movie->release_date}}</li>
            </ul>
        </div>
    </div>
</div>

<style>
    .movieblock {
        width: 100%;
        height: 300px;
        background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/{{$movie->poster_path}}')";
    }
    .movieinfo {
        width: 100%;
        height: 100%;
        background: green;
    }
</style>