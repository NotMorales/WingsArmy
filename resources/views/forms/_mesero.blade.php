@csrf
<div class="form-group">
    <label name="nombre">Nombre</label>
    <input name="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" placeholder="Wing´s Army" value="{{ old('nombre', $mesero->nombre) }}">
</div>
<div class="form-group">
    <label name="telefono">Telefono</label>
    <input name="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" placeholder="9211479791" value="{{ old('telefono', $mesero->telefono) }}">
</div>
<div class="form-group">
    <label name="correo">Correo</label>
    <input name="correo" type="email" class="form-control @error('correo') is-invalid @enderror" placeholder="WingsArmy@gmail.com" value="{{ old('correo', $mesero->correo) }}">
</div>
<div class="form-group">
  <label name="direccion">Direccion</label>
  <textarea name="direccion" class="form-control @error('direccion') is-invalid @enderror" rows="2">{{ old('direccion', $mesero->direccion) }}</textarea>
</div>
<button type="submit" class="btn btn-primary btn-block">
    <span data-feather="calendar"></span>
    {{ $btnText }}
</button>
