@extends('layouts.app')

@section('content')

    <x-header titulo="Meseros" agregar="{{ Route('mesero.create') }}"></x-header>

    <h2>Crear mesero</h2>
    <form method="POST" action="{{ Route('mesero.store') }}">

        @include('forms._mesero', ['btnText' => 'Guardar'])

    </form>
@endsection
