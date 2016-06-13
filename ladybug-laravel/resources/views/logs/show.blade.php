@extends('app')

@section('content')

  <h1>Log:</h1>

  <log>
    {{$log->body}}
  </log>


@stop