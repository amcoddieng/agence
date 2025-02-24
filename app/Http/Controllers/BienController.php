<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function index()
    {
        $biens = Bien::all();
        return response()->json($biens);
    }

    public function show($id)
    {
        $bien = Bien::findOrFail($id);
        return response()->json($bien);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'adresse' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'type' => 'required|string|in:villa,terrain,appartement,magasin,bureau'
        ]);

        $bien = Bien::create($validatedData);
        return response()->json($bien, 201);
    }

    public function update(Request $request, $id)
    {
        $bien = Bien::findOrFail($id);

        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'adresse' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'type' => 'required|string|in:villa,terrain,appartement,magasin,bureau'
        ]);

        $bien->update($validatedData);
        return response()->json($bien);
    }

    public function destroy($id)
    {
        $bien = Bien::findOrFail($id);
        $bien->delete();
        return response()->json(['message' => 'Bien supprimé avec succès']);
    }
}
