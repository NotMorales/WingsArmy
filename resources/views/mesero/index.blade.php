@extends('layouts.app')

@section('content')

    <x-header titulo="Meseros" agregar="{{ Route('mesero.create') }}"></x-header>

    <h2>Lista de meseros</h2>
    @include('includes.sessions')

    <div class="table-responsive">
        <table id="DataTable" class="table table-striped table-sm myTable" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($meseros as $mesero)
                    <tr>
                        <td>{{ $mesero->nombre }}</td>
                        <td>{{ $mesero->telefono }}</td>
                        <td>{{ $mesero->correo }}</td>
                        <td>{{ $mesero->direccion }}</td>
                        <td>
                            @if ( $mesero->deleted_at == 0 )
                                Activo
                            @else
                                Retirado
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('mesero.edit', $mesero) }}"><i data-feather="edit-2"></i></a>
                            <a href="{{ route('mesero.delete', $mesero) }}"><i data-feather="trash-2"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
