@extends('layouts.app')

@section('content')
    <h1>{{ $superhero->superhero_name }}</h1>
    <p>Nombre real: {{ $superhero->real_name }}</p>
    <p><img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" /></p>
    <p>Información adicional: {{ $superhero->additional_info }}</p>
    <a href="{{ route('superheroes.edit', $superhero) }}">Editar</a>
    <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{ route('superheroes.index') }}">Volver</a>
@endsection
