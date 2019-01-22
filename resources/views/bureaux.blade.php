@extends('layouts.complete')

@section('content')

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Etage</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($materiels as $materiel)
      <tr>
        <th>{{ $materiel->name }}</th>
        <td>{{ $materiel->floor }}</td>
        <td><a href="{{ url('deletemat') }}"><img src="{{ asset('img/delete.png')}}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('modifmat') }}"><img src="{{ asset('img/edit.png')}}"></a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@stop
