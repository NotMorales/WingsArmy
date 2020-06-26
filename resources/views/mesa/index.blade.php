@extends('layouts.app')

@section('content')

    <x-header titulo="Mesas" agregar="{{ Route('mesa.create') }}"></x-header>

    <h2>Lista de mesas</h2>
    @include('includes.sessions')

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($mesas as $mesa)
                    <tr>
                        <td> 1 </td>
                        <td>{{ $mesa->nombre }}</td>
                        <td>{{ $mesa->descripcion }}</td>
                        <td>
                            <a href="{{ route('mesa.edit', $mesa) }}"><i data-feather="edit-2"></i></a>
                            <form method="POST" action="{{ route('mesa.destroy', $mesa) }}">
                                @csrf @method('DELETE')
                                <button><i data-feather="trash-2"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
