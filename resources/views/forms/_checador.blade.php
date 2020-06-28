@csrf
<div class="form-group">
    <label name="meseroId">Meseros</label>
    <select name="meseroId" class="form-control">
        @foreach ($meseros as $mesero)
            <option value="{{ $mesero->meseroId }}">{{ $mesero->nombre }}</option>
        @endforeach
    </select>
  </div>
<button type="submit" class="btn btn-primary btn-block">
    <span data-feather="calendar"></span>
    {{ $btnText }}
</button>
