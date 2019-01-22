@extends('layouts.complete')

@section('content')

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Serial</th>
      <th scope="col">Marque</th>
      <th scope="col">Modèle</th>
      <th scope="col">Numéro d'inventaire</th>
      <th scope="col">Utilisateur</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($materiels as $materiel)
      <tr>
        <th>{{ $materiel->id }}</th>
        <td>{{ $materiel->name }}</td>
        <td>{{ $materiel->type }}</td>
        <td>{{ $materiel->serial }}</td>
        <td>{{ $materiel->brand }}</td>
        <td>{{ $materiel->model }}</td>
        <td>{{ $materiel->numcot }}</td>
        <td>{{ $materiel->user }}</td>
        <td><a href="{{ url('deletemat') }}"><img src="{{ asset('img/delete.png')}}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('modifmat',$materiel->id) }}"><img src="{{ asset('img/edit.png')}}"></a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@stop
