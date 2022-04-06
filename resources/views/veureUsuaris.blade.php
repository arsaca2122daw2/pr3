@extends('disseny')

@section('content')

<h1>Llista de socis</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>ID</td>
          <td>Nom</td>
          <td>Cognom</td>
          <td>Correu</td>
        </tr>
    </thead>
    <tbody>
        @foreach($socis as $soci)
        <tr>
            <td>{{$soci->id}}</td>
            <td>{{$soci->nom}}</td>
            <td>{{$soci->congoms}}</td>
            <td>{{$soci->correu}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection