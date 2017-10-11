@extends('layouts.app')
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


      <form method="POST" action="{{route('tasks.update', $task->id)}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" value="{{$task->title}}" id="title" name="title" aria-describedby="title" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3">{{$task->description}}</textarea>
        </div>
        <div class="form-check">
          <label class="form-check-label">La tâche est-elle faite ?</label>
            <input type="radio" class="done" name="done" value="1" {{$task->done ? 'checked' : ''}} class="form-check-input">
            Done
            <input type="radio" class="done" name="done" value="0" {{$task->done ? '' : 'checked'}} class="form-check-input">
            Not done
        </div>
        <button type="submit" class="btn btn-primary" value="Send">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection