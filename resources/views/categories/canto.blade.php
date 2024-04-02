@extends('layouts.plantilla')

@section('content')


    <h1>FUTBOL</h1>

    <table class="table-users-index" >
        <thead>
            <tr>

                <th>DESCRIPCIÓN</th>
                <th>CATEGORIA</th>
                <th>VIDEO</th>
            </tr>


        </thead>

            <tbody>

                @foreach ($filteredData as $canto)
                    <tr>
                        <td> {{ $canto['descripcion'] }} </td>
                        <td>{{ $canto['nombre_talento'] }}</td>
                        <td>{{ $canto['url_multimedia'] }}</td>

                        {{-- <td> <a href="{{ route('users.show', $user['id']) }}">Ver</a> </td>
                        <td> <a href="{{ route('users.destroy', $user['id']) }}">Eliminar</a></td> --}}

                    </tr>
                @endforeach
            </tbody>

@endsection
