<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $titulo }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
        <a href="{{ $agregar }}" class="btn btn-sm btn-outline-secondary">Añadir Nuevo</a>
        <a href="{{ $btn2 ?? '' }}" class="btn btn-sm btn-outline-secondary">{{ $text2 ?? '' }}</a>

    </div>
    <button class="btn btn-sm btn-outline-secondary">
        <span data-feather="calendar"></span>
        {{date('d-m-Y')}}
    </button>
    </div>
</div>
