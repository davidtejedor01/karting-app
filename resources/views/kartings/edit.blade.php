@extends('layouts.app')

@section('title', 'Editar Karting')

@section('content')
    <h1>Editar Karting</h1>
    <a href="{{ route('kartings.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('kartings.update', $karting->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('layouts.form', ['karting' => $karting])
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection