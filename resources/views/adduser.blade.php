@extends('layouts.complete')

@section('content')
<div class="col-md-4 offset-4 text-center">
  <h1>Ajout d'utilisateur</h1>
  {!! Form::open(array('url' => '/adduser', 'method' => 'post')) !!}
    {{ Form::label('pec','Pecodop ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('pec') }}
    <hr>
    {{ Form::label('name','Nom ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('name') }}
    <hr>
    {{ Form::label('firstname','Prénom ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('firstname') }}
    <hr>
    {{ Form::label('service','Service ', ['class' => 'awesome'])}}
    <br>
    {{ Form::select('service',['Accession'               => 'Accession',
                               'Assurance'               => 'Assurance',
                               'Communication'           => 'Communication',
                               'Compta./Charges'         => 'Compta./Charges',
                               'Contentieux'             => 'Contentieux',
                               'Contrôle de gestion'     => 'Contrôle de gestion',
                               'COPRO'                   => 'COPRO',
                               'CRC'                     => 'CRC',
                               'DAP'                     => 'DAP',
                               'Direction'               => 'Direction',
                               'Exploitation'            => 'Exploitation',
                               'GED'                     => 'GED',
                               'GL'                      => 'GL',
                               'Informatique'            => 'Informatique',
                               'Présidence / Directoire' => 'Présidence / Directoire',
                               'Proximité'               => 'Proximité',
                               'RH'                      => 'RH',
                               'Secrétariat de Direction' => 'Secrétariat de Direction',
                               'Sécurité'                => 'Sécurité'
                               ]), null, ['placeholder' => 'Choisir le matériel...'] }}
    <hr>
    {{ Form::label('bureau','Bureau ', ['class' => 'awesome'])}}
    <br>
    {{ Form::select('bureau',['Accueil' => 'Accueil',
                              '1'       => '1',
                              '101'     => '101',
                              '102'     => '102',
                              '103'     => '103',
                              '104'     => '104',
                              '106'     => '106',
                              '107'     => '107',
                              '108'     => '108',
                              '202'     => '202',
                              '203'     => '203',
                              '204'      => '204',
                              '205'      => '205',
                              '206'      => '206',
                              '207'      => '207',
                              '208'      => '208',
			      '209'      => '209',
                              '210'      => '210',
                              '211'      => '211',
                              '212'      => '212',
                              '213'      => '213',
                              '214'      => '214',
                              '215'      => '215',
                              '220'      => '220',
                              '230'      => '230',
                              '231'      => '231',
                              '232'      => '232',
                              '302'      => '302',
                              '303'      => '303',
                              '309'      => '309',
                              '310'      => '310',
                              '311'      => '311',
                              '312'      => '312',
                              '313'      => '313',
                              '315'      => '315',
                              '316'      => '316',
                              '320'      => '320',
                              '321'      => '321',
                              '322'      => '322'
                             ]), null, ['placeholder' => 'Choisir le matériel...'] }}
    <hr>
    {{ csrf_field() }}
    {{ Form::submit('Enregistrer')}}

  {!! Form::close() !!}
</div>


@stop
