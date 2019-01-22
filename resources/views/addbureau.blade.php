@extends('layouts.complete')

@section('content')
<div class="col-md-4 offset-4 text-center">
  <h1>Ajout d'un bureau</h1>
  {!! Form::open(array('url' => '/addbureau', 'method' => 'post')) !!}
    {{ Form::label('name','Nom du bureau ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('name') }}
    <hr>
    {{ Form::label('floor','Etage ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('floor') }}
    <hr>
    {{ csrf_field() }}
    {{ Form::submit('Enregistrer')}}

    {!! Form::close() !!}

  </div>
@stop
