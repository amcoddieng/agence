<?php

use App\Http\Controllers\dashbord;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\app;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\bureau;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\magazin;
use App\Http\Controllers\terrain;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\villa;
use App\Http\Controllers\VillaController;

Route::get('/', function () {
    return view('admin.nav.nav');
});
Route::resource('dashboard', dashbord::class);




// Route::resource('agents', AgentController::class);
// Route::resource('personnes', PersonneController::class);
// Route::resource('biens', BienController::class);
// Route::resource('contrats', ContratController::class);
// Route::resource('app', AppartementController::class);
// Route::resource('villa', VillaController::class);
// Route::resource('bureau', BureauController::class);
// // Route::resource('magazin', magazin::class);
// Route::resource('terrain', TerrainController::class);

Route::apiResource('biens', BienController::class);
Route::apiResource('appartements', app::class);
// Route::apiResource('magasins', MagasinController::class);
Route::apiResource('bureaux', BureauController::class);
Route::apiResource('villas', VillaController::class);
Route::apiResource('terrains', TerrainController::class);


// route pour la gestion des appartement
Route::get('/appartements/create', [app::class, 'create'])->name('appartements.create');
Route::post('/appartements', [app::class, 'store'])->name('appartements.store');
Route::get('/appartements', [app::class, 'index'])->name('appartements.index');
Route::get('/appartements/{id}', [app::class, 'show'])->name('appartements.show');
Route::get('/appartements/{id}/edit', [app::class, 'edit'])->name('appartements.edit');
Route::put('/appartements/{id}', [app::class, 'update'])->name('appartements.update');
Route::delete('/appartements/{id}', [app::class, 'destroy'])->name('appartements.destroy');
