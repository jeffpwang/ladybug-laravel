@extends('app')

@section('content')

<h1>Create New Log</h1>

{!! Form::open() !!}

  <div class="form-group">
  {!! Form::Label('before_rating', "Rate how you feeling right now?") !!}
  {!! Form::select('before_rating', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']) !!}
  </div>


  <div class="form-group">
  {!! Form::Label('content', "Describe what you are feeling:") !!}
  {!! Form::text('content', null, ['class' => 'form-control']) !!}
  </div>


  <div class="form-group">
  {!! Form::Label('after_rating', "After logging, how do you feel?") !!}
  {!! Form::select('after_rating', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']) !!}
  </div>


{!! Form::close() !!}


@stop