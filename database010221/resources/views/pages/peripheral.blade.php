@extends('layouts.main-layout')

@section('content')

  @foreach ($peripherals as $peripheral)

    <p>{{ $peripheral -> name}}</p>


  @endforeach

@endsection
