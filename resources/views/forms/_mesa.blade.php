@csrf
<div class="form-group">
    <label name="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" placeholder="Mesa #0" value="{{ old('nombre', $mesa->nombre) }}">
</div>
<div class="form-group">
    <label name="descripcion">Descripcion</label>
    <input name="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" placeholder="Frente a la barra norte." value="{{ old('descripcion', $mesa->descripcion) }}">
</div>
<button type="submit" class="btn btn-primary btn-block">
    <span data-feather="calendar"></span>
    {{ $btnText }}
</button>
