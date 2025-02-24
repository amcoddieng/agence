<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
        $terrains = Terrain::with('bien')->get();
        return response()->json($terrains);
    }

    public function show($id)
    {
        $terrain = Terrain::with('bien')->findOrFail($id);
        return response()->json($terrain);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bien_id' => 'required|exists:bien,id'
        ]);

        $terrain = Terrain::create($validatedData);
        return response()->json($terrain, 201);
    }

    public function update(Request $request, $id)
    {
        $terrain = Terrain::findOrFail($id);

        $validatedData = $request->validate([
            'bien_id' => 'required|exists:bien,id'
        ]);

        $terrain->update($validatedData);
        return response()->json($terrain);
    }

    public function destroy($id)
    {
        $terrain = Terrain::findOrFail($id);
        $terrain->delete();
        return response()->json(['message' => 'Terrain supprimé avec succès']);
    }
}
