<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Ranking;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = Goal::orderBy('totaal_doelpunten', 'desc')->get(); // Aannemend dat je wilt sorteren op gescoorde goals
        return view('goals.index', compact('goals'));

    }

    public function create()
    {
        return view('goals.create');
    }

    public function store(Request $request)
    {
         // Valideer de invoer
        $request->validate([
            'naam_speler' => 'required|string|max:255',
            'totaal_doelpunten' => 'required|integer',
        ]);

        // Maak een nieuwe instantie van het model
        $goal = new Goal();

        // Vul de gegevens van het model in met behulp van de invoer
        $goal->naam_speler = $request->naam_speler;
        $goal->totaal_doelpunten = $request->totaal_doelpunten;

        //slaat de info ingegeven op
        $goal->save();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('goals.index')->with('success', 'succesvol toegevoegd.');
    }

    public function edit(Goal $goal)
    {
        return view('goals.edit', compact('goal'));
    }

    public function update(Request $request, Goal $goal)
    {
        $request->validate([
            'naam_speler' => 'required|string|max:255',
            'totaal_doelpunten' => 'required|integer',
        ]);

        $goal->naam_speler = $request->naam_speler;
        $goal->totaal_doelpunten = $request->totaal_doelpunten;

        $goal->save();

        return redirect()->route('goals.index')->with('success', 'succesvol bijgewerkt.');
    }

    public function destroy($id)
    {
        $goal = Goal::findOrFail($id);
        $goal->delete();

        return redirect()->route('goals.index')->with('success', 'succesvol verwijderd.');
    }

}