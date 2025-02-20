<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;

class BienController extends Controller
{
    public function index() {
        $biens = Bien::paginate(10);
        return view('admin.bien.index', compact('biens'));
    }

    public function create() {
        return view('biens.create');
    }

    public function store(Request $request) {
        $bien = Bien::create($request->all());
        return redirect()->route('biens.index');
    }

    public function show($id) {
        $bien = Bien::findOrFail($id);
        return view('biens.show', compact('bien'));
    }

    public function edit($id) {
        $bien = Bien::findOrFail($id);
        return view('biens.edit', compact('bien'));
    }

    public function update(Request $request, $id) {
        $bien = Bien::findOrFail($id);
        $bien->update($request->all());
        return redirect()->route('biens.index');
    }

    public function destroy($id) {
        $bien = Bien::findOrFail($id);
        $bien->delete();
        return redirect()->route('biens.index');
    }
}
