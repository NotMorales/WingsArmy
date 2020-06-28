@extends('layouts.app')

@section('content')

    <x-header titulo="Asignacion de mesas" agregar="{{ Route('asignacion.create') }}"></x-header>

    <h2>Mesas</h2>
    @include('includes.sessions')

    <div class="">
        <div class="row">
            <div class=" row col-md-8">
                @foreach ($mesas as $mesa)
                    @php
                        $color = $mesa->estado == 0 ? 'success'  :'danger';
                    @endphp
                    <div class="card text-white bg-{{$color}} mb-2 col-md-4" style="max-width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$mesa->nombre}}</h5>
                          <p class="card-text">@php
                                $meseroTem = App\asignacion::where([
                                    'mesaId' => $mesa->mesaId,
                                    'final' => null,
                                    'total' => null
                                ])->first();
                          @endphp
                          <strong>Mesero asignado: </strong> {{$meseroTem ? $meseroTem->mesero->nombre : 'Sin mesero' }}</p>
                          @if ($mesa->estado == 0)
                            <a href="{{Route('asignacion.asignar', $mesa)}}" class="btn btn-primary btn-sm btn-block" role="button" aria-pressed="true">Asignar</a>
                          @else
                            <a href="{{Route('asignacion.terminar', $mesa)}}" class="btn btn-warning btn-sm btn-block" role="button" aria-pressed="true">Terminar</a>
                          @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <h2>Mesero siguiente:</h2>
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        @foreach ($meseros as $mesero)
                            <li class="list-group-item">{{$mesero->mesero->nombre}}</li>
                        @endforeach
                        @if ( count($meseros) == 0)
                            <li class="list-group-item text-danger">Ningun mesero trabajando!</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /container -->


@endsection
