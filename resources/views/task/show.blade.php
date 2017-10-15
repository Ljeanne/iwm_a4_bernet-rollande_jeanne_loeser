@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 panel">
      <h1>To do list</h1>
      <ul>

          <li><a href="{{route('tasks.show',$task->id)}}">{{$task->title}}</a></li>
          <li>{{$task->description}}</li>
      </ul>
    </div>
  </div>
</div>
@endsection