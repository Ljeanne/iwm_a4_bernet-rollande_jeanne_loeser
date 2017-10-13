<form method="POST" action="{{route('movies.update', $movie['dbMovie']->id)}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" value="{{$movie['movie']->id}}" name="movie_id">
    <input type="hidden" value="{{$seen}}" name="seen">
    <input type="hidden" value="{{$movie['movie']->genres[0]->id}}" name="category">
    <button type="submit" class="btn btn-primary" value="Send"><i class="{{$picto}}"></i>{{$button}}</button>
</form>
{{--
@if($movie->favorite == 1)
    @include('forms.favorite', ['movie' => $movie['dbMovie'], 'favorite' => 0, 'button' => 'Empty to favorite', 'picto' => 'ion-star-empty']))
@else
    @include('forms.favorite', ['movie' => $movie['dbMovie'], 'favorite' => 1, 'button' => 'Add to favorite', 'picto' => 'ion-star']))
@endif
--}}
