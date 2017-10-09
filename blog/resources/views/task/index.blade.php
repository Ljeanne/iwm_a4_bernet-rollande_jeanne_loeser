@extends('template.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 panel">
      <h1>To do list</h1>
      <ul>
        @foreach($tasks as $task)
          <li>{{$task}}</li>
          @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection