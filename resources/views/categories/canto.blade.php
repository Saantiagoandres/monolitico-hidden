@extends('layouts.plantilla')

@section('content')


    <h1>CANTO</h1>

    <table class="table-users-index" >
        <thead>
            <tr>

                <th>DESCRIPCIÓN</th>
                <th>VIDEO</th>
            </tr>


        </thead>

            <tbody>

                @foreach ($filteredData as $canto)
                    <tr>
                        <td> {{ $canto['descripcion'] }} </td>

                        <td>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('http://127.0.0.1:8000/' . $canto['url_multimedia']) }}" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                    </td>

                        {{-- <td> <a href="{{ route('users.show', $user['id']) }}">Ver</a> </td>
                        <td> <a href="{{ route('users.destroy', $user['id']) }}">Eliminar</a></td> --}}

                    </tr>
                @endforeach
            </tbody>
    </table>

@endsection
