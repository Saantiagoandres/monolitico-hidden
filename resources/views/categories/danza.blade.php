@extends('layouts.plantilla')

@section('content')


    <h1>DANZA</h1>

    <table class="table-users-index" >
        <thead>
            <tr>

                <th>DESCRIPCIÓN</th>
                <th>VIDEO</th>
            </tr>


        </thead>

            <tbody>

                @foreach ($filteredData as $danza)
                    <tr>
                        <td> {{ $danza['descripcion'] }} </td>

                        <td>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('http://127.0.0.1:8000/' . $danza['url_multimedia']) }}" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                    </td>
                    </tr>
                @endforeach
            </tbody>
    </table>

@endsection
