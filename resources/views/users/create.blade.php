
    @vite(['resources/css/app.css', 'resources/css/footer.css','resources/css/perfil1.css', 'resources/css/somos.css', 'resources/css/carrusel.css','resources/css/table-index.css', 'resources/js/carrusel.js', 'resources/js/script.js', 'resources/css/registrar.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <form action="{{ route('users.store') }}" method="POST">
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>

                <p>o usa tu email para registrarte</p>
                <form class="form form-register" novalidate>
                    @csrf
                    <div class="form" >
                        <label >
                            <i class='bx bx-user' ></i>
                            <input type="text" placeholder="Nombre Usuario" name="name" >
                        </label>
                    </div>
                    <div class="form">
                        <label >
                            <i class='bx bx-user' ></i>
                            <input type="text" placeholder="Apellidos" name="lastname" >
                        </label>
                    </div>
                    <div class="form" >
                        <label>
                            <i class='bx bx-mobile-alt' ></i>
                            <input type="text" placeholder="Telefono" name="telefono" >
                        </label>
                    </div>
                    <div class="form" >
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" placeholder="Correo Electronico" name="email" >
                        </label>
                    </div>
                   <div class="form" >
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" placeholder="Contraseña" name="password">
                        </label>
                   </div>

                   <div class="form" >
                    <label>
                        <i class='bx bx-user' ></i>
                        <select name="role_id">
                            @foreach ($roles as $role)
                                <option value="{{ $role['id'] }}">{{ $role['nombre_rol'] }}</option>
                            @endforeach
                        </select>
                    </label>
               </div>



               <div class="form">
               <button type="submit"> Registrate </button>
            </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>o Iniciar Sesión con una cuenta</p>
                <form class="form form-login"novalidate>
                    <div>
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" placeholder="Correo Electronico" name="userPassword">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" placeholder="Contraseña" name="userPassword">
                        </label>
                    </div>
                    <div>
                    </div>
                    <a href="{{route('users.home')}}" style="text-decoration: none;">Iniciar Sesion</a>
                    <div class="alerta-error">Todos los campos son obligatorios</div>
                    <div class="alerta-exito">Te registraste correctamente</div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="js/register.js"></script>
    <script src="js/login.js"></script>


    {{-- <h1>Nuevo Usuario</h1>

<form action="{{ route('users.store') }}" method="POST">


        @csrf
        <label for="name">Nombre: <br> <input type="text" name="name"> </label>
        <br>
        <label for="lastname">Apellidos: <br> <input type="text" name="lastname"> </label>
        <br>
        <label for="telefono">Telefono: <br> <input type="text" name="telefono"> </label>
        <br>
        <label for="email">Correo electronico: <br> <input type="text" name="email"> </label>
        <br>
        <label for="password">Contraseña <br> <input type="password" name="password"> </label>
        <br>

        <label>Rol:</label>
        <select name="role_id">
            @foreach ($roles as $role)
                <option value="{{ $role['id'] }}">{{ $role['nombre_rol'] }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit"> Registrate </button>
    </form> --}}
