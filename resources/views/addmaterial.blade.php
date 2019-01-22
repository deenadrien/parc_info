@extends('layouts.complete')

@section('content')
<div class="col-md-4 offset-4 text-center">
  <h1>Ajout de matériel</h1>
  {!! Form::open(array('url' => '/add', 'method' => 'post')) !!}
    {{ Form::label('name','Nom ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('name') }}
    <hr>
    {{ Form::label('type','Type ', ['class' => 'awesome'])}}
    <br>
    {{ Form::select('type',['Unite centrale' => 'Unite centrale',
                            'Ecran'          => 'Ecran',
                            'Pc portable'    => 'Pc Portable',
                            'Tablette'       => 'Tablette',
                            'Imprimante'     => 'Imprimante']), null, ['placeholder' => 'Choisir le matériel...'] }}
    <hr>
    {{ Form::label('os','Système d\'exploitation ', ['class' => 'awesome'])}}
    <br>
    {{ Form::select('soft',['Windows 7' => 'Windows 7',
                            'Windows 8' => 'Windows 8',
                            'Android'   => 'Android',
                            'Debian'    => 'Debian',
                            'Ubuntu'    => 'Ubuntu',
			    'N/A'	=> 'N/A'
                            ]), null, ['placeholder' => 'Choisir le système d\'exploitation...'] }}
    <hr>
    {{ Form::label('serial','Numéro de série ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('serial') }}
    <hr>
    {{ Form::label('brand','Marque ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('brand') }}
    <hr>
    {{ Form::label('model','Modèle ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('model') }}
    <hr>
    {{ Form::label('numcot','Numéro d\'inventaire interne ', ['class' => 'awesome'])}}
    <br>
    {{ Form::text('numcot') }}
    <hr>
    {{ Form::label('user','Utilisateur ', ['class' => 'awesome'])}}
    <br>
    {{ Form::select('user',['HUYS' => 'HUYS',
                            'AAUB' => 'AAUB',
			    'KCAS' => 'KCAS'

                            ]), null, ['placeholder' => 'Choisir l\'utilisateur...'] }}
    <hr>
    {{ Form::label('soft','Groupe de logiciels ', ['class' => 'awesome'])}}
    <br>
    {{ Form::select('soft',['Accession'             => 'Accession',
                            'Accueil'               => 'Accueil',
                            'Assurance'             => 'Assurance',
                            'Comunication'          => 'Communication',
                            'Compta'                => 'Compta',
                            'Contentieux'           => 'Contentieux',
                            'CRC'                   => 'CRC',
                            'DAP'                   => 'DAP',
                            'Direction - Financier' => 'Direction - Financier',
                            'Direction - Générale'  => 'Direction - Générale',
                            'GED'                   => 'GED',
                            'Gestion Locative'      => 'Gestion Locative',
                            'Informatique'          => 'Informatique',
                            'Ressources Humaines'   => 'Ressources Humaines',
                            'Secrétariat Direction' => 'Secrétariat Direction',
                            'Syndic'                => 'Syndic',
                            'Technique'             => 'Technique'
                            ]), null, ['placeholder' => 'Choisir le groupe de logiciels...'] }}
    <br>
    <hr>
    {{ csrf_field() }}
    {{ Form::submit('Enregistrer')}}

  {!! Form::close() !!}
</div>


@stop
