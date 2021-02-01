@extends('layouts.main-layout')

@section('content')

  <a href="{{ route('peripheral-create') }}">Crea una nuova periferica</a>

  @foreach ($peripherals as $peripheral)

    <a href="{{ route('peripheral-show', $peripheral -> id )}}">

      <h3>{{ $peripheral -> name}}</h3>

    </a>

  @endforeach

@endsection
