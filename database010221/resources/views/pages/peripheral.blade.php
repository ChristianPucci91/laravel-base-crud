@extends('layouts.main-layout')

@section('content')

  @foreach ($peripherals as $peripheral)

    <a href="{{ route('peripheral-show', $peripheral -> id )}}">
      
      <h3>{{ $peripheral -> name}}</h3>

    </a>

  @endforeach

@endsection
