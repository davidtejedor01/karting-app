<div class="mb-3">
    <label class="text-white fw-bolder" style="text-shadow: 2px 2px 4px #000000">Nombre</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $karting->name ?? '') }}">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="text-white fw-bolder" style="text-shadow: 2px 2px 4px #000000">Velocidad</label>
    <input type="number" name="speed" class="form-control" value="{{ old('speed', $karting->speed ?? '') }}">
    @error('speed')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="text-white fw-bolder" style="text-shadow: 2px 2px 4px #000000">Color</label>
    <input type="text" name="color" class="form-control" value="{{ old('color', $karting->color ?? '') }}">
    @error('color')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>