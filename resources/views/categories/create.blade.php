<h1>Nuevo Talento</h1>

<form action="{{ route('categories.store') }}" method="POST">


        @csrf
        <label for="descripcion">Descripcion: <br> <input type="text" name="descripcion"> </label>
        <br>
        <label for="url_multimedia">Talento: <br> <input type="text" name="url_multimedia"> </label>
        <br>


        {{-- <label>Rol:</label>
        <select name="role_id">
            @foreach ($roles as $role)
                <option value="{{ $role['id'] }}">{{ $role['nombre_rol'] }}</option>
            @endforeach
        </select>
        <br> --}}

        <button type="submit">Subir Video</button>



    </form>
