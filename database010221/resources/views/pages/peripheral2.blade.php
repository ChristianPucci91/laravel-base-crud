@extends('layouts.main-layout')

@section('content')

 <p>id:  {{ $peripheral -> id}}</p>
 <p>name: {{ $peripheral -> name}} </p>
 <p>model: {{ $peripheral -> model}}</p>
 <p>price: {{ $peripheral -> price}} $</p>
 <p>consumpion: {{ $peripheral -> consumption}} Watt</p>

@endsection
