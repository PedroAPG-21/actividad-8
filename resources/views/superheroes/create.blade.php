@extends('layouts.app')

@section('content')
    <h1>Registrar Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="real_name">Nombre real:</label>
        <input type="text" name="real_name" required>
        <label for="superhero_name">Nombre del superhéroe:</label>
        <input type="text" name="superhero_name" required>
        <label for="photo_url">URL de la foto:</label>
        <input type="url" name="photo_url" required>
        <label for="additional_info">Información adicional:</label>
        <textarea name="additional_info"></textarea>
        <button type="submit">Registrar</button>
    </form>
@endsection
