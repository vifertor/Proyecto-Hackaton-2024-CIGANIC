<div>
    <h2>Listado de Vacunas</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vacunas as $vacuna)
            <tr>
                <td>{{ $vacuna->Id_vacuna }}</td>
                <td>{{ $vacuna->nombre_de_vacuna }}</td>
                <td>{{ $vacuna->Descripción }}</td>
                <td>{{ $vacuna->Estado ? 'Activa' : 'Inactiva' }}</td>
                <td>
                    <a href="{{ route('editar-vacuna', $vacuna->Id_vacuna) }}">Editar</a>
                    <button wire:click="eliminar({{ $vacuna->Id_vacuna }})">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/crear">
        <button>Crear Nueva Vacuna</button>
    </a>
</div>
