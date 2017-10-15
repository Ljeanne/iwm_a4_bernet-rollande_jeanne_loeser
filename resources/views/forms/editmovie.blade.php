@php
 if (is_array($movie)) { $m = $movie['movie']; } else { $m = $movie;}
@endphp

<form method="POST" action="{{route('movies.update', 1)}}" id="{{ $seen ? 'seen' : 'tosee' }}{{ $m->id }}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" value="{{ $m->id}}" name="movie_id">
    <input type="hidden" value="{{$seen}}" name="seen">
    <input type="hidden" value="{{ isset($m->genres[0]) ? $m->genres[0]->id : 1 }}" name="category">
    {{--<button type="submit" class="btn btn-primary" value="Send"><i class="{{$picto}}"></i>{{$button}}</button>--}}
</form>
<div class="social-btn">
    <a href="" class="parent-btn link-{{$seen}} seen-btn form-btn-{{ $m->id }} {{ isset($status) &&($status === $seen) ? 'active' : '' }}" data-movie="{{ $m->id }}"><i class="{{$picto}}"></i>{{$button}}</a>
</div>
{{--
@if($movie->favorite == 1)
    @include('forms.favorite', ['movie' => $movie['dbMovie'], 'favorite' => 0, 'button' => 'Empty to favorite', 'picto' => 'ion-star-empty']))
@else
    @include('forms.favorite', ['movie' => $movie['dbMovie'], 'favorite' => 1, 'button' => 'Add to favorite', 'picto' => 'ion-star']))
@endif
--}}
