<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')HIDDEN TALENTS</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">>
    <link rel="stylesheet" href="css/inicio.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

        @vite(['resources/css/app.css', 'resources/css/footer.css','resources/css/perfil1.css', 'resources/css/somos.css', 'resources/css/carrusel.css','resources/css/table-index.css', 'resources/js/carrusel.js', 'resources/js/script.js', 'resources/css/form.css'])
</head>
<body>
    <br>
    <header>
        <div class="container">
            <input type="checkbox" name="" id="check">
            <div class="nav-btn">
                <div class="logo-container">
                    <h3 class="logo"><span><br><a href=""><img src="{{asset('images/logo.png')}}" alt="Logo"></span></h3>
                </div>

                <div class="nav-links">
                    <ul><br><br><br><br><br><br><br><br>
                        <li class="nav-link" style="--i: .6s">
                            <a href="{{route('users.home')}}">INICIO</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">SOMOS<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="{{route('mision')}}">MISION</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="{{route('vision')}}">VISION</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">CATEGORIAS<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="{{route('categories.futbol')}}">FUTBOL</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="{{route('categories.canto')}}">CANTO</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="{{route('categories.arte')}}">ARTE</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="{{route('categories.danza')}}">DANZA</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="{{route('contactenos')}}">CONTÁCTENOS</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign" style="--i: 1.8s">
                    <a href="{{route('users.index')}}" class="btn transparent">Perfil</a>
                    <a href="{{route('users.create')}}" class="btn solid">LOGIN</a>
                    <a href="{{route('categories.create')}}" class="btn solid"> PUBLICAR</a>

                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>

        <br>
        <marquee behavior="" direction="" style="color: #ffffff;">BIENVENIDOS A HIDDEN TALENTS </marquee>



    <div class="container">
        @yield('content')
    </div>



    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="{{asset('images/logo.png')}}" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>En HIDDEN TALENTS optamos porque estes agusto con nuestro
                     aplicativo tu comodidad siempre va ser nuestra primera
                     opción esperamos que te sientas de la mejor manera posible.</p>
                <p>Si puedes Soñarlo Puedes Lograrlo</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://web.facebook.com/profile.php?id=100007605466202" class="fa fa-facebook"></a>
                    <a href="https://web.facebook.com/profile.php?id=100007605466202" class="fa fa-instagram"></a>
                    <a href="https://youtube.com/@user-qf2nn6jp6w?si=b7uY-2Qw6mBNlSCF" class="fa fa-twitter"></a>
                    <a href="https://youtube.com/@user-qf2nn6jp6w?si=b7uY-2Qw6mBNlSCF" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>Hidden Talents</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>

</body>
    </html>





