@extends('layouts.app')

@section('title', 'Nuevo Karting')

@section('content')
    <h1>Nuevo Karting</h1>
    <a href="{{ route('kartings.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('kartings.store') }}" method="POST">
        @csrf
        @include('layouts.form', ['karting' => null])
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection