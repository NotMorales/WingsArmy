@extends('layouts.app')

@section('content')

    <x-header titulo="Mesas" agregar="{{ Route('mesa.create') }}"></x-header>

    <h2>Editar mesa</h2>
    <form method="POST" action="{{ Route('mesa.update', $mesa) }}">
        @method('PATCH')

        @include('forms._mesa', ['btnText' => 'Editar'])

    </form>
@endsection
