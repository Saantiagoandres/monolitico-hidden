@extends('layouts.plantilla')

@section('content')


<div class="carousel-container">
    <div class="carousel" id="carousel">
      <img src="{{asset('images/danza.jpg')}}" alt="Imagen 1" width="400" height="300">
      <img src="{{asset('images/arte1.jpg')}}" alt="Imagen 2" width="400" height="300">
      <img src="{{asset('images/fut.jpg')}}" alt="Imagen 3" width="400" height="300">
      <img src="{{asset('images/vos.jpeg')}}" alt="Imagen 4" width="400" height="300">
    </div>
  </div>
  @endsection
