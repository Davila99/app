<table class="table table-dark">
    <thead class="thead-light">
        <tr>

            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($estudiantes as $estudiante)

            <tr>
                <td><img src="{{ asset('storage') . '/' . $estudiante->foto }}" width="100"
                        class="rounded float-start" alt=""></td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->correo }}</td>
                <td><a href="{{ url('/estudiante/' . $estudiante->id . '/edit') }}" class="btn btn-info">
                        Editar </a>|
                    <form action="{{ url('/estudiante/' . $estudiante->id) }}" method="post" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Estas seguro de eliminar este registro?')"
                            class="btn btn-danger" value="eliminar">
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
