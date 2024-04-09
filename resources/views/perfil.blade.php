@extends('home')

@section('content')


<section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" style="background-image: url('images/portada.jpg');">
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="images/perfil.jpg" alt="img">
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i>
                    <span>Cambiar foto</span>
                </a>
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario">Stiven Lopez</h4>
                <ul class="lista-perfil">
                    <li>Hola ven y ayudame apoyandome mi contenido</li>
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button type="">Cambiar portada</button>
                <button type=""><i class="fas fa-wrench"></i></button>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i> Publicaciones</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i>Amigos 43</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
            </ul>
        </div>
    </div>


    <div class="subidas">
        <div class="productos">
            <br>

            <br>
        </section>
@endsection
