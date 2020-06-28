@extends('layouts.app')

@section('content')

    <x-header titulo="Checador" agregar="{{ Route('checador.create') }}"></x-header>

    <h2>Reloj Checador - Todos</h2>
    @include('includes.sessions')

    <div class="table-responsive">
        <table id="DataTable" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($checadors as $checador)
                    <tr>
                        <td>{{ $checador->mesero->nombre }}</td>
                        <td>{{ $checador->fecha }}</td>
                        <td>{{ $checador->entrada }}</td>
                        <td>{{ $checador->salida }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
