<?php

namespace App\Http\Controllers;

use App\Models\Bureau;
use App\Models\ImmeubleBureau;
use Illuminate\Http\Request;

class BureauController extends Controller
{
    public function index()
    {
        $bureaux = ImmeubleBureau::with('bien')->get();
        return response()->json($bureaux);
    }

    public function show($id)
    {
        $bureau = ImmeubleBureau::with('bien')->findOrFail($id);
        return response()->json($bureau);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nbPoste' => 'nullable|integer',
            'bien_id' => 'required|exists:bien,id'
        ]);

        $bureau = ImmeubleBureau::create($validatedData);
        return response()->json($bureau, 201);
    }

    public function update(Request $request, $id)
    {
        $bureau = ImmeubleBureau::findOrFail($id);

        $validatedData = $request->validate([
            'nbPoste' => 'nullable|integer',
            'bien_id' => 'required|exists:bien,id'
        ]);

        $bureau->update($validatedData);
        return response()->json($bureau);
    }

    public function destroy($id)
    {
        $bureau = ImmeubleBureau::findOrFail($id);
        $bureau->delete();
        return response()->json(['message' => 'Bureau supprimé avec succès']);
    }
}
