@extends('layouts.app')

@section('content')
    <h1>Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}">Registrar nuevo superhéroe</a>
    <ul>
        @foreach ($superheroes as $superhero)
            <li>
                <a href="{{ route('superheroes.show', $superhero) }}">{{ $superhero->superhero_name }}</a>
                <a href="{{ route('superheroes.edit', $superhero) }}">Editar</a>
                <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection