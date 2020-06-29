@extends('layouts.app')

@section('content')

    <x-header titulo="Reportes" agregar="{{ Route('reporte.create') }}"></x-header>


    <div class="row">
        <div class="col-md-8">
            <h2>Fecha: {{$date}}</h2>
        </div>
        <div class="col-md-4">
            <form action="{{Route('reporte.fecha')}}" method="POST" class="form-inline">
                @csrf
                    <div class="form-group mx-sm-3 mb-2">
                    <label name="date" >Fecha:  </label>
                    <input name="date" type="date" class="form-control" value="{{$date}}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Ver Reporte</button>
            </form>
        </div>
    </div>
    @include('includes.sessions')

    <div class="table-responsive">
        <table id="DataTable" class="table table-striped table-sm myTable" >
            <thead>
                <tr>
                    <th>Mesero</th>
                    <th>Clientes atendidos</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($meseros as $meseroTem)
                <tr>
                    <td>{{ $meseroTem->mesero->nombre }}</td>
                    <td>{{$meseroTem->total}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
