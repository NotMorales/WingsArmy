@extends('layouts.app')

@section('content')

    <x-header titulo="Checador" agregar="{{ Route('checador.create') }}"
        btn2="{{ Route('checador.all') }}" text2="Todos"></x-header>

    <h2>Reloj Checador - {{ date('Y-m-d') }}</h2>
    @include('includes.sessions')

    <div class="table-responsive">
        <table id="DataTable" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($checadors as $checador)
                    <tr>
                        <td>{{ $checador->mesero->nombre }}</td>
                        <td>{{ $checador->fecha }}</td>
                        <td>{{ $checador->entrada }}</td>
                        <td>{{ $checador->salida }}</td>
                        <td>
                            <a href="{{ route('checador.exit', $checador) }}" title="Salida"><i data-feather="user-minus"></i></a>
                            {{-- <a href="{{ route('checador.edit', $checador) }}"><i data-feather="edit-2"></i></a> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
