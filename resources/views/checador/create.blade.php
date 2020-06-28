@extends('layouts.app')

@section('content')

    <x-header titulo="Checador" agregar="{{ Route('checador.create') }}"></x-header>

    <h2>Realizar Check</h2>
    <form method="POST" action="{{ Route('checador.store') }}">

        @include('forms._checador', ['btnText' => 'Entrada'])

    </form>
@endsection
