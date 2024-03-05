<h1>Nuevo Usuario</h1>

<form action="{{ route('roles.store') }}" method="POST">

    @csrf
    <label for="nombre_rol">Nombre_rol: <br> <input type="text" name="nombre_rol"> </label>
    <br>

    <button type="submit"> Registrate </button>



</form>
