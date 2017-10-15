<form method="POST" action="{{route('movies.update', $movie['dbMovie']->id)}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" value="{{$movie->id}}" name="movie_id">
    <input type="hidden" value="{{$favorite}}" name="favorite">
    <input type="hidden" value="{{$movie->genres[0]->id}}" name="category">
</form>
<div class="social-btn">
    <a href="" class="parent-btn seen-btn" data-movie="{{ $movie->id }}"><i class="{{$picto}}"></i>{{$button}}</a>
</div>