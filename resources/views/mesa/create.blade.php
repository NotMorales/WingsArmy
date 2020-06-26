@extends('layouts.app')

@section('content')

    <x-header titulo="Mesas" agregar="{{ Route('mesa.create') }}"></x-header>

    <h2>Crear mesa</h2>
    <form method="POST" action="{{ Route('mesa.store') }}">

        @include('forms._mesa', ['btnText' => 'Guardar'])

    </form>
@endsection
