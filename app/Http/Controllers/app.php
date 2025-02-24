<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Bien;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Afficher la liste des appartements.
     */
    public function index()
    {
        $appartements = Appartement::with('bien')->get();
        return view('admin.bien.app.index', compact('appartements'));
    }

    /**
     * Afficher le formulaire d'ajout d'un nouvel appartement.
     */
    public function create()
    {
        return view('admin.bien.app.create');
    }

    /**
     * Enregistrer un nouvel appartement.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            // Champs pour Bien
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|integer|min:0',
            'region' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'surface' => 'nullable|integer|min:0',

            // Champs pour Appartement
            'nbChambre' => 'required|integer|min:0',
            'nbSalon' => 'required|integer|min:0',
            'nbSalleBain' => 'required|integer|min:0',
        ]);

        // Création du Bien
        $bien = Bien::create([
            'titre' => $validatedData['titre'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'region' => $validatedData['region'],
            'ville' => $validatedData['ville'],
            'adresse' => $validatedData['adresse'],
            'surface' => $validatedData['surface'],
            'disponibilite' => 1, // Disponible par défaut
        ]);

        // Création de l'Appartement
        Appartement::create([
            'bien_id' => $bien->id,
            'nbChambre' => $validatedData['nbChambre'],
            'nbSalon' => $validatedData['nbSalon'],
            'nbSalleBain' => $validatedData['nbSalleBain'],
        ]);

        return redirect()->route('admin.bien.app.index')->with('success', 'Appartement ajouté avec succès.');
    }

    /**
     * Afficher un appartement spécifique.
     */
    public function show(Appartement $appartement)
    {
        return view('admin.bien.app.show', compact('appartement'));
    }

    /**
     * Afficher le formulaire de modification d'un appartement.
     */
    public function edit(Appartement $appartement)
    {
        return view('admin.bien.app.edit', compact('appartement'));
    }

    /**
     * Mettre à jour un appartement existant.
     */
    public function update(Request $request, Appartement $appartement)
    {
        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|integer|min:0',
            'region' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'surface' => 'nullable|integer|min:0',

            'nbChambre' => 'required|integer|min:0',
            'nbSalon' => 'required|integer|min:0',
            'nbSalleBain' => 'required|integer|min:0',
        ]);

        // Mise à jour du Bien associé
        $appartement->bien->update([
            'titre' => $validatedData['titre'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'region' => $validatedData['region'],
            'ville' => $validatedData['ville'],
            'adresse' => $validatedData['adresse'],
            'surface' => $validatedData['surface'],
        ]);

        // Mise à jour de l'Appartement
        $appartement->update([
            'nbChambre' => $validatedData['nbChambre'],
            'nbSalon' => $validatedData['nbSalon'],
            'nbSalleBain' => $validatedData['nbSalleBain'],
        ]);

        return redirect()->route('admin.bien.app.index')->with('success', 'Appartement mis à jour avec succès.');
    }

    /**
     * Supprimer un appartement.
     */
    public function destroy(Appartement $appartement)
    {
        // Suppression de l'appartement et du bien associé
        $appartement->bien->delete();
        $appartement->delete();

        return redirect()->route('admin.bien.app.index')->with('success', 'Appartement supprimé avec succès.');
    }
}
