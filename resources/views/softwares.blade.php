@extends('layouts.complete')

@section('content')

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Logiciels présents dans le groupe</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($materiels as $materiel)
    @php
      $list = ""
    @endphp
      @if($materiel->office == 1)
        @php
          $list .= "Office"
        @endphp
      @endif

      @if($materiel->salvia == 1)
        @php
          $list .= "; Salvia"
        @endphp
      @endif

      @if($materiel->cegid == 1)
        @php
          $list .= "; Cegid"
        @endphp
      @endif

      @if($materiel->leon == 1)
        @php
          $list .= "; Leon"
        @endphp
      @endif

      @if($materiel->crypto == 1)
        @php
          $list .= "; Crypto"
        @endphp
      @endif

      @if($materiel->ifc == 1)
        @php
          $list .= "; Ifc Expert"
        @endphp
      @endif

      @if($materiel->pih == 1)
        @php
          $list .= "; PiH"
        @endphp
      @endif

      @if($materiel->pcb == 1)
        @php
          $list .= "; PCB"
        @endphp
      @endif

      @if($materiel->forms == 1)
        @php
          $list .= "; Forms"
        @endphp
      @endif

      @if($materiel->gesprojet == 1)
        @php
          $list .= "; Gesprojet"
        @endphp
      @endif

      @if($materiel->creativesuite == 1)
        @php
          $list .= "; Creative Suite"
        @endphp
      @endif
      <tr>
        <td><b>{{ $materiel->name }}</b></td>
        <td>{{ $list }}</td>
        <td><a href="{{ url('deletemat') }}"><img src="{{ asset('img/delete.png') }}"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('modifmat',$materiel->id) }}"><img src="{{ asset('img/edit.png')}}"></a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@stop
