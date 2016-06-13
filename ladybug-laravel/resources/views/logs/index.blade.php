@extends('app')

@section('content')

  <h1>Logs</h1>

  @foreach ($logs as $log)
  <log>
    <a href="{{ action('LogsController@show', [$log->id]) }}">{{$log->before_rating}}</a>
    <div class="body">{{$log->body}}</div>
  </log>
  @endforeach


@stop