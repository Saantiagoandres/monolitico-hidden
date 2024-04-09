
@extends('layouts.plantilla')

@section('content')

<section class="mision-container">
    <div class="mision">
        <div class="mision-texto">
            <h2>Visión</h2>
            <p>Nuestra Visión es para el año 2027 es ser un sitio web y móvil
                funcional en la ciudad de Popayán llegando a múltiples hogares,
                 brindándoles un servicio de calidad a nuestros usuarios payaneses.</p>
        </div>
        <div class="mision-imagenes">
            <div class="imagen">
                <img src="{{asset('images/vision.png')}}" alt="Imagen 1">
            </div>
        </div>
    </div>
</section>
@endsection
