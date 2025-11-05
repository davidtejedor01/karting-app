@extends('layouts.app')

@section('title', 'Registro')

@section('content')
    <div class="card p-4 shadow" style="width: 350px; margin: auto;">
        <h3 class="text-center mb-3">Registrarse</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label class="">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-2">Registrarse</button>
            <a href="{{ route('login') }}" class="btn btn-secondary w-100">Volver</a>
        </form>
    </div>
@endsection