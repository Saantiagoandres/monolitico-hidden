<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIDDEN TALENTS</title>


    <link rel="stylesheet" href="{{asset('css/index/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/table-index.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/index/carrusel.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/perfil1.css')}}">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/perfiles.css">
    <link rel="stylesheet" href="{{asset('css/index/footer.css')}}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="css/carrusel.css"> -->
</head>
<body>
    <header>
        <nav>
            <div class="logo">
            <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#">Quiénes Somos</a>
                        <ul class="submenu">
                            <li><a href="mision.html">Misión</a></li>
                            <li><a href="vision.html">Visión</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Categorias</a>
                        <ul class="submenu">
                            <li><a href="futbol.html">Futbol</a></li>
                            <li><a href="arte.html">Arte</a></li>
                            <li><a href="danza.html">Danza</a></li>
                            <li><a href="canto.html">Canto</a></li>
                        </ul>
                    </li>

                    <li><a href="contactenos.html">Contáctenos</a></li>
                    <li><a href="chat.html">Chat</a></li>
                </ul>
            </div>


            <div class="perfil">
                <a href="perfil.html">Perfil</a>
            </div>
        </nav>

    </header>
        <br>
        <marquee behavior="" direction="" style="color: #ffffff;">BIENVENIDOS A HIDDEN TALENTS </marquee>
        <br><br>

        {{-- <div class="carrusel">
            <div class="carousel-slide">
              <img src="images/arte1.jpg" alt="Imagen 1">
            </div>
            <div class="carousel-slide">
              <img src="images/canto.jpg" alt="Imagen 2">
            </div>
            <div class="carousel-slide">
              <img src="images/danza.jpg" alt="Imagen 3">
            </div>
          </div>
    <br> --}}

    @yield('content')


    {{-- <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
                <div class="terms">
                    <p>En HIDDEN TALENTS optamos porque estes agusto con nuestro aplicativo tu comodidad siempre va ser nuestra primera opción esperamos que te sientas de la mejor manera posible.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="">App Desarrollo</a>
                <a href="#">App Marketing</a>
                <a href="#">IOS Desarrollo</a>
                <a href="#">Android Desarrollo</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2023 <b>HIDDEN TALENTS</b></p>
        </div>

        <i class="desplazarse-hacia-arriba" id="desplazarse-hacia-arriba"><img src="icon/arriba.png" class="socicon up-arrow" alt="desplazarse-hacia-arriba"/></i>

        <script src="js/deslizar.js"></script>

              <script src="{{asset('js/carrusel/carrusel.js')}}"></script>
    </footer>
    </body> --}}
    </html>





