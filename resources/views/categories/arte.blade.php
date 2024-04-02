@extends('layouts.plantilla')

@section('content')


    <h1>ARTE</h1>

    <table class="table-users-index" >
        <thead>
            <tr>

                <th>DESCRIPCIÓN</th>
                <th>CATEGORIA</th>
                <th>VIDEO</th>
            </tr>


        </thead>

            <tbody>

                @foreach ($filteredData as $arte)
                    <tr>
                        <td> {{ $arte['descripcion'] }} </td>
                        <td>{{ $arte['nombre_talento'] }}</td>
                        <td>{{ $arte['url_multimedia'] }}</td>

                        {{-- <td> <a href="{{ route('users.show', $user['id']) }}">Ver</a> </td>
                        <td> <a href="{{ route(1'users.destroy', $user['id']) }}">Eliminar</a></td> --}}

                    </tr>
                @endforeach
            </tbody>

@endsection
