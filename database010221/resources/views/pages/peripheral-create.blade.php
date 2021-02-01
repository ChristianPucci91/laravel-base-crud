@extends('layouts.main-layout')

@section('content')

   <h1>Crea nuova periferica</h1>

   <form action="{{ route('peripheral-store')}}" method="POST">

     @csrf
     @method('POST')

     <label for="name">Name: </label>
     <input type="text" name="name">

     <br>

     <label for="model">Model: </label>
     <input type="text" name="model">

     <br>

     <label for="price">Price: </label>
     <input type="text" name="price">

     <br>

     <label for="consumption">Consumption: </label>
     <input type="text" name="consumption">

     <br>

     <input type="submit" value="Salva">

   </form>

@endsection
