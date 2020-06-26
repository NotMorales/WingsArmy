@extends('layouts.app')

@section('content')

    <x-header titulo="Meseros" agregar="{{ Route('mesero.create') }}"></x-header>

    <h2>Editar mesero</h2>
    <form method="POST" action="{{ Route('mesero.update', $mesero) }}">
        @method('PATCH')

        @include('forms._mesero', ['btnText' => 'Editar'])

    </form>
@endsection
