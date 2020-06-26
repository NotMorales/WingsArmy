@extends('layouts.app')

@section('content')

    <x-header titulo="Meseros" agregar="{{ Route('mesero.create') }}"></x-header>

    <h2>Lista de meseros</h2>
    @include('includes.sessions')

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($meseros as $mesero)
                    <tr>
                        <td> 1 </td>
                        <td>{{ $mesero->nombre }}</td>
                        <td>{{ $mesero->telefono }}</td>
                        <td>{{ $mesero->correo }}</td>
                        <td>{{ $mesero->direccion }}</td>
                        <td>
                            <a href="{{ route('mesero.edit', $mesero) }}">Editar</a>
                            <form method="POST" action="{{ route('mesero.destroy', $mesero) }}">
                                @csrf @method('DELETE')
                                <button>Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
