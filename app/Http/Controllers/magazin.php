<?php

// namespace App\Http\Controllers;

// use App\Models\Magazin;
// use Illuminate\Http\Request;

// class MagasinController extends Controller
// {
//     public function index()
//     {
//         $magasins = Magazin::with('bien')->get();
//         return response()->json($magasins);
//     }

//     public function show($id)
//     {
//         $magasin = Magazin::with('bien')->findOrFail($id);
//         return response()->json($magasin);
//     }

//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'surface' => 'nullable|integer',
//             'bien_id' => 'required|exists:bien,id'
//         ]);

//         $magasin = Magasin::create($validatedData);
//         return response()->json($magasin, 201);
//     }

//     public function update(Request $request, $id)
//     {
//         $magasin = Magazin::findOrFail($id);

//         $validatedData = $request->validate([
//             'surface' => 'nullable|integer',
//             'bien_id' => 'required|exists:bien,id'
//         ]);

//         $magasin->update($validatedData);
//         return response()->json($magasin);
//     }

//     public function destroy($id)
//     {
//         $magasin = Magasin::findOrFail($id);
//         $magasin->delete();
//         return response()->json(['message' => 'Magasin supprimé avec succès']);
//     }
// }
