@extends('layouts.complete')

@section('content')
<div class="col-md-4 offset-4 text-center">
  <h1>Ajout d'utilisateur</h1>
  {!! Form::open(array('url' => '/addsoft', 'method' => 'post')) !!}
    {{ Form::label('name','Nom du groupe ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('name') }}
    <hr>
    {{ Form::label('logiciel','Logiciels ', ['class' => 'awesome'])}}
    <br>
    Office : {{ Form::number('office','0')}}<br>
    Salvia : {{ Form::number('salvia','0')}}<br>
    Cegid : {{ Form::number('cegid','0')}}<br>
    Leon : {{ Form::number('leon','0')}}<br>
    Crypto : {{ Form::number('crypto','0')}}<br>
    Ifc : {{ Form::number('ifc','0')}}<br>
    Pcb : {{ Form::number('pcb','0')}}<br>
    Pih : {{ Form::number('pih','0')}}<br>
    Forms : {{ Form::number('forms','0')}}<br>
    Gesprojet : {{ Form::number('gesprojet','0')}}<br>
    Creative Suite : {{ Form::number('creativesuite','0')}}<br>
    <br>
    <hr>
    {{ csrf_field() }}
    {{ Form::submit('Enregistrer')}}

  {!! Form::close() !!}
</div>


@stop
