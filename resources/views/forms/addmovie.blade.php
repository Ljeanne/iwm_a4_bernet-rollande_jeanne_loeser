<form method="POST" action="{{route('movies.store')}}" id="seen{{ $movie->id }}">
    {{csrf_field()}}
    <input type="hidden" value="{{$movie->id}}" name="movie_id">
    <input type="hidden" value="{{$seen}}" name="seen">
    <input type="hidden" value="{{$movie->genre_ids[0]}}" name="category">
</form>
<div class="social-btn">
    <a href="" class="parent-btn seen-btn" data-movie="{{ $movie->id }}"><i class="{{$picto}}"></i>{{$button}}</a>
</div>