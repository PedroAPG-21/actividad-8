@extends('layouts.app')

@section('content')
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="real_name">Nombre real:</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}" required>
        <label for="superhero_name">Nombre del superhéroe:</label>
        <input type="text" name="superhero_name" value="{{ $superhero->superhero_name }}" required>
        <label for="photo_url">URL de la foto:</label>
        <input type="url" name="photo_url" value="{{ $superhero->photo_url }}" required>
        <label for="additional_info">Información adicional:</label>
        <textarea name="additional_info">{{ $superhero->additional_info }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
@endsection
