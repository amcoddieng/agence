<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;

class ContratController extends Controller
{
    public function index() {
        $contrats = Contrat::all();
        return view('contrats.index', compact('contrats'));
    }

    public function create() {
        return view('contrats.create');
    }

    public function store(Request $request) {
        $contrat = Contrat::create($request->all());
        return redirect()->route('contrats.index');
    }

    public function show($id) {
        $contrat = Contrat::findOrFail($id);
        return view('contrats.show', compact('contrat'));
    }

    public function edit($id) {
        $contrat = Contrat::findOrFail($id);
        return view('contrats.edit', compact('contrat'));
    }

    public function update(Request $request, $id) {
        $contrat = Contrat::findOrFail($id);
        $contrat->update($request->all());
        return redirect()->route('contrats.index');
    }

    public function destroy($id) {
        $contrat = Contrat::findOrFail($id);
        $contrat->delete();
        return redirect()->route('contrats.index');
    }
}
