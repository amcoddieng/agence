<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Client;
use App\Models\Message;
use Illuminate\Http\Request;

class dashbord extends Controller
{
    public function index() {
        $RecentBien = Bien::latest()->take(5)->get(); // Remplace par ton modèle de propriétés
        $messageNonVu = Message::where('vu', 0)->count(); // Comptage des messages non lus
        $nbClient=Client::all()->count();
        $nbBien=Bien::all()->count();

        return view('admin.dashbord', compact('RecentBien', 'messageNonVu','nbClient','nbBien'));
    }
}
