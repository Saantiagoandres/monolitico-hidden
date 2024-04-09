@extends('layouts.plantilla')
@section('content')

@vite(['resources/css/app.css', 'resources/css/footer.css','resources/css/perfil1.css', 'resources/css/somos.css', 'resources/css/carrusel.css','resources/css/table-index.css', 'resources/js/carrusel.js', 'resources/js/script.js', 'resources/css/publicar.css'])


<form action="http://127.0.0.1:8000/v1/categories" method="POST" enctype="multipart/form-data">
<section class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="descripcion" id="nombres" placeholder="Ingresa una descripcion">
    <br>
    <select name="nombre_talento">
        <option>Futbol </option>
        <option>Canto </option>
        <option>Danza </option>
        <option>Arte </option>

    </select>
    <label for="url_multimedia">Video<br> <input accept="video/*" type="file" name="url_multimedia"></label>

    <label for="candidate_id">Usuario<br> <input type="text" name="candidate_id"  value="" > </label>

    <input class="botons" type="submit" value="Publicar">
  </section>

  @endsection
