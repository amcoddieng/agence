<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

class PersonneController extends Controller
{
    public function index() {
        $personnes = Personne::all();
        return view('personnes.index', compact('personnes'));
    }

    public function create() {
        return view('personnes.create');
    }

    public function store(Request $request) {
        $personne = Personne::create($request->all());
        return redirect()->route('personnes.index');
    }

    public function show($id) {
        $personne = Personne::findOrFail($id);
        return view('personnes.show', compact('personne'));
    }

    public function edit($id) {
        $personne = Personne::findOrFail($id);
        return view('personnes.edit', compact('personne'));
    }

    public function update(Request $request, $id) {
        $personne = Personne::findOrFail($id);
        $personne->update($request->all());
        return redirect()->route('personnes.index');
    }

    public function destroy($id) {
        $personne = Personne::findOrFail($id);
        $personne->delete();
        return redirect()->route('personnes.index');
    }
}
