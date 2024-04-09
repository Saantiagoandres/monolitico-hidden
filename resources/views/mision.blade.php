@extends('layouts.plantilla')

@section('content')

<section class="mision-container">
    <div class="mision">
        <div class="mision-texto">
            <h2>Misión</h2>
            <p>Contribuir con el desarrollo social y humano dando a conocer
                los talentos de las personas de una forma innovadora, brindándoles
                la oportunidad de que las personas que miran su contenido si están
                interesados en su talento puedan contactarlos por este medio de una
                forma fácil, eficaz y segura.</p>
        </div>
        <div class="mision-imagenes">
            <div class="imagen">
                <img src="{{asset('images/mision.png')}}" alt="Imagen 1">
            </div>
        </div>
    </div>
</section>




@endsection
