@extends('layouts.app')

@section('content')

    <x-header titulo="Mesas" agregar="{{ Route('mesa.create') }}"></x-header>

    <h2>Lista de mesas</h2>
    @include('includes.sessions')

    <div class="table-responsive">
        <table id="DataTable" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($mesas as $mesa)
                    <tr>
                        <td>{{ $mesa->nombre }}</td>
                        <td>{{ $mesa->descripcion }}</td>
                        <td>
                            <a href="{{ route('mesa.edit', $mesa) }}"><i data-feather="edit-2"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
