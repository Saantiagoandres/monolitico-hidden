<h1>Images</h1>


<table class="table-users-index">
    <thead>
        <tr>

            <th>Descripcion</th>
            <th>Video</th>

        </tr>


    </thead>

    <tbody>

        @foreach ($data as $image)
            <tr>
                <td> {{ $image['image_url'] }} </td>
                <td>{{ $image['user_id'] }}</td>

                <td> <a href="{{ route('images.show', $image['id']) }}">Ver</a> </td>
                <td> <a href="{{ route('images.destroy', $image['id']) }}">Eliminar</a></td>

            </tr>
        @endforeach
    </tbody>


</table>
