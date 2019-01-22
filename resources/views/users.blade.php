@extends('layouts.complete')

@section('content')

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">PEC</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Service</th>
      <th scope="col">Bureau</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($materiels as $materiel)
      <tr>
        <th>{{ $materiel->pec }}</th>
        <td>{{ $materiel->name }}</td>
        <td>{{ $materiel->firstname }}</td>
        <td>{{ $materiel->service }}</td>
        <td>{{ $materiel->bureau }}</td>
        <td><a href="{{ url('deletemat') }}"><img src="{{ asset('img/delete.png')}}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('modifmat',$materiel->id) }}"><img src="{{ asset('img/edit.png')}}"></a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@stop
