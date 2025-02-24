<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index()
    {
        $villas = Villa::with('bien')->get();
        return response()->json($villas);
    }

    public function show($id)
    {
        $villa = Villa::with('bien')->findOrFail($id);
        return response()->json($villa);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nbChambre' => 'nullable|integer',
            'nbSalon' => 'nullable|integer',
            'nbSalleBain' => 'nullable|integer',
            'nbGarage' => 'nullable|integer',
            'bien_id' => 'required|exists:bien,id'
        ]);

        $villa = Villa::create($validatedData);
        return response()->json($villa, 201);
    }

    public function update(Request $request, $id)
    {
        $villa = Villa::findOrFail($id);

        $validatedData = $request->validate([
            'nbChambre' => 'nullable|integer',
            'nbSalon' => 'nullable|integer',
            'nbSalleBain' => 'nullable|integer',
            'nbGarage' => 'nullable|integer',
            'bien_id' => 'required|exists:bien,id'
        ]);

        $villa->update($validatedData);
        return response()->json($villa);
    }

    public function destroy($id)
    {
        $villa = Villa::findOrFail($id);
        $villa->delete();
        return response()->json(['message' => 'Villa supprimée avec succès']);
    }
}
