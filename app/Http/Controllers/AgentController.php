<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    public function index() {
        $agents = Agent::all();
        return view('agents.index', compact('agents'));
    }

    public function create() {
        return view('agents.create');
    }

    public function store(Request $request) {
        $agent = Agent::create($request->all());
        return redirect()->route('agents.index');
    }

    public function show($id) {
        $agent = Agent::findOrFail($id);
        return view('agents.show', compact('agent'));
    }

    public function edit($id) {
        $agent = Agent::findOrFail($id);
        return view('agents.edit', compact('agent'));
    }

    public function update(Request $request, $id) {
        $agent = Agent::findOrFail($id);
        $agent->update($request->all());
        return redirect()->route('agents.index');
    }

    public function destroy($id) {
        $agent = Agent::findOrFail($id);
        $agent->delete();
        return redirect()->route('agents.index');
    }
}
