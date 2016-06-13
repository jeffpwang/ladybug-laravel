@extends('app')

@section('content')

<h1>Create New Log</h1>

{!! Form::open(['url' => 'logs']) !!}

  <div class="form-group">
  {!! Form::Label('added_on', "Log Date:") !!}
  {!! Form::input('date', 'added_on', date('Y-m-d'), ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
  {!! Form::Label('before_rating', "Rate how you feeling right now?") !!}
  {!! Form::select('before_rating', [1 => '1', 2 => '2', 3 =>'3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10']) !!}
  </div>


  <div class="form-group">
  {!! Form::Label('content', "Describe what you are feeling:") !!}
  {!! Form::text('content', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
  {!! Form::Label('distortion', "What type of negative thinking is this?") !!}
  {!! Form::select('distortion', ['All or nothing thinking' => 'All or nothing thinking', 'Overgeneralization' => 'Overgeneralization', 'Mental filter' => 'Mental filter', 'Discounting the positives' => 'Discounting the positives', 'Jumping to conclusions' => 'Jumping to conclusions', 'Magnification or Minimization' => 'Magnification or Minimization', 'Emotional reasoning' => 'Emotional reasoning', 'Should statements' => 'Should statements', 'Labeling' => 'Labeling', 'Personalization and blame' => 'Personalization and blame']) !!}
  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  See Descriptions
  </button>
  </div> 


  <div class="form-group">
  {!! Form::Label('after_rating', "After logging, how do you feel?") !!}
  {!! Form::select('after_rating', [1 => '1', 2 => '2', 3 =>'3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10']) !!}
  </div>

  <div class="form-group">
  {!! Form::submit('Add Log', ['class' => 'btn btn-primary form-control']) !!}
  </div>


{!! Form::close() !!}

<!-- Modal for Distortions -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cognitive Distortions</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Distortion</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>All-or-nothing thinking</td>
              <td>You see things in black-and-white categories. If your performance falls short of perfect, you see yourself as a total failure.</td>
            </tr>
            <tr>
              <td>Overgeneralization</td>
              <td>You see a single negative event as a never-ending pattern of defeat.</td>
            </tr>
            <tr>
              <td>Mental Filter</td>
              <td>You pick out a single negative detail and dwell on it exclusively so that your vision of all reality becomes darkened, like the drop of ink that discolors the entire beaker of water.</td>
            </tr>
            <tr>
              <td>Discounting the positives</td>
              <td>You reject positive experiences by insisting they “don’t count” for some reason or other. In this way you can maintain a negative belief that is contradicted by your everyday experiences.</td>
            </tr>
            <tr>
              <td>Jumping to conclusions</td>
              <td>You make a negative interpretation even though there are no definite facts that convincingly support your conclusion.</td>
            </tr>
            <tr>
              <td>Mind reading</td>
              <td>You arbitrarily conclude that someone is reacting negatively to you, and you don’t bother to check this out.</td>
            </tr>
            <tr>
              <td>Fortune telling</td>
              <td>You anticipate that things will turn out badly, and you feel convinced that your prediction is an already-established fact.</td>
            </tr>
            <tr>
              <td> Magnification or minimization</td>
              <td>You exaggerate the importance of things (such as your goof-up or someone else’s achievement), or you inappropriately shrink things until they appear tiny (your own desirable qualities or other fellow’s imperfections). This is also called the “binocular trick.”</td>
            </tr>
            <tr>
              <td>Emotional reasoning</td>
              <td>You assume that your negative emotions necessarily reflect the way things really are: “I feel it, therefore it must be true.”</td>
            </tr>
            <tr>
              <td>Should Statements</td>
              <td>You try to motivate yourself with should and shouldn’t, as if you had to be whipped and punished before you could be expected to do anything. “Musts” and “oughts” are also offenders. The emotional consequences are guilt. When you direct should statements toward others, you feel anger, frustration, and resentment.</td>
            </tr>  
            <tr>
              <td>Labeling and mislabeling</td>
              <td>This is an extreme form of overgeneralization. Instead of describing your error, you attach a negative label to yourself. “I’m a loser.” When someone else’s behavior rubs you the wrong way, you attach a negative label to him” “He’s a damn louse.” Mislabeling involves describing an event with language that is highly colored and emotionally loaded.</td>
            </tr>
            <tr>
              <td>Personalization</td>
              <td>You see your self as the cause of some negative external event, which in fact you were not primarily responsible for.</td>
            </tr>          
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@stop