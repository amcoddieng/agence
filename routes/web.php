<?php

use App\Http\Controllers\dashbord;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\ContratController;

Route::get('/', function () {
    return view('admin.nav.nav');
});
Route::resource('dashboard', dashbord::class);




Route::resource('agents', AgentController::class);
Route::resource('personnes', PersonneController::class);
Route::resource('biens', BienController::class);
Route::resource('contrats', ContratController::class);

