<?php

namespace App\Http\Controllers;

use App\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required',
            'superhero_name' => 'required',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|string',
        ]);

        Superhero::create($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe registrado correctamente.');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'real_name' => 'required',
            'superhero_name' => 'required',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|string',
        ]);

        $superhero->update($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado correctamente.');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado correctamente.');
    }
}