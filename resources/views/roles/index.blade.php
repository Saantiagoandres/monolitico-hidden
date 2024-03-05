@extends('layouts.plantilla')

@section('content')


    <h1>Roles</h1>

     <div class="contenedor">
    <table class="table-users-index" >
        <thead>
            <tr>

                <th>Nombre_Rol</th>

            </tr>


        </thead>

            @foreach ($data as $role)
                <tr>
                    <td> {{ $role['nombre_rol'] }} </td>


                    {{-- <td> <a href="{{ route('roles.show', $role['id']) }}">Ver</a> </td>
                    <td> <a href="{{ route('roles.destroy', $role['id']) }}">Eliminar</a></td> --}}

                    </tr>
            @endforeach
        </tbody>


    </table></div>


@endsection
