@extends('template.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 panel">
      <h1>Add task</h1>
      @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
          @endforeach
        </ul>
      @endif
      <form method="POST" action="{{route('tasks.store')}}">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Titre">
        <br / />
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br / />
        <input type="submit" value="Send">
      </form>
    </div>
  </div>
</div>
@endsection