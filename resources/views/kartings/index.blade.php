@extends('layouts.app')

@section('title', 'Kartings')

@section('content')
    <h1 class="text-white text-center fw-semibold" style="text-shadow: 2px 2px 4px #000000">Kartings</h1>
    <div class="mb-3 d-flex">
        <input type="text" id="search-name" class="form-control m-2" placeholder="Buscar por nombre...">
        <input type="text" id="search-min-speed" class="form-control m-2" placeholder="Buscar por velocidad mínima...">
        <input type="text" id="search-max-speed" class="form-control m-2" placeholder="Buscar por velocidad máxima...">
    </div>

    @if($kartings->isEmpty())
        <p>No hay kartings registrados.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Velocidad</th>
                    <th>Color</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="kartings-body">
                @foreach($kartings as $karting)
                    <tr>
                        <td>{{ $karting->id }}</td>
                        <td>{{ $karting->name }}</td>
                        <td>{{ $karting->speed }}</td>
                        <td>{{ $karting->color }}</td>
                        <td>
                            <a href="{{ route('kartings.edit', $karting->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('kartings.destroy', $karting->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Seguro?')">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="d-flex justify-content-between">
        <a href=" {{ route('kartings.create') }}" class="btn btn-primary mb-3">Nuevo Karting</a>
        <form method="POST" action="{{ route('logout') }}" class="text-end mb-3">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        // Toma lo que escribis en el input con id 'search-name' y por cada tecla que apretes hace una peticion GET  a la ruta kartings.index
        $('#search-name, #search-min-speed, #search-max-speed').on('keyup change', function () {
            let name = $('#search-name').val();
            let minSpeed = $('#search-min-speed').val();
            let maxSpeed = $('#search-max-speed').val();
            $.get("{{ route('kartings.index') }}", { filter_name: name, min_speed: minSpeed, max_speed: maxSpeed }, function (data) { // data = HTML de toda la vista que devuelve Laravel.
                let html = $(data).find('#kartings-body').html(); // Busca de la vista devuelta solo la tabla. Extrae el contenido HTML de esa parte.
                $('#kartings-body').html(html); // Reemplaza el contenido actual de la tabla.
            });
        });
    </script>
@endpush