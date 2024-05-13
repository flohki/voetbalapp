<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index()
    {
        $rankings = Ranking::all();
        return view('rankings.index', compact('rankings'));
    }

    public function create()
    {
        return view('rankings.create');
    }

    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'ploegnaam' => 'required|string|max:255',
            'aantal_matchen_gespeeld' => 'required|integer',
            'gewonnen' => 'required|integer',
            'verloren' => 'required|integer',
            'gelijkspel' => 'required|integer',
            'doelpunten_voor' => 'required|integer',
            'doelpunten_tegen' => 'required|integer',
            'doelpunten_verschil' => 'required|integer',
            'punten_behaald' => 'required|integer',
        ]);

        // Maak een nieuwe instantie van het model
        $ranking = new Ranking();

        // Vul de gegevens van het model in met behulp van de invoer
        $ranking->ploegnaam = $request->ploegnaam;
        $ranking->aantal_matchen_gespeeld = $request->aantal_matchen_gespeeld;
        $ranking->gewonnen = $request->gewonnen;
        $ranking->verloren = $request->verloren;
        $ranking->gelijkspel = $request->gelijkspel;
        $ranking->doelpunten_voor = $request->doelpunten_voor;
        $ranking->doelpunten_tegen = $request->doelpunten_tegen;
        $ranking->doelpunten_verschil = $request->doelpunten_verschil;
        $ranking->punten_behaald = $request->punten_behaald;

        // Sla het model op
        $ranking->save();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('rankings.index')->with('success', 'Klassement is succesvol toegevoegd.');
    }

    public function edit(Ranking $ranking)
    {
        return view('rankings.edit', compact('ranking'));
    }

    public function destroy($id)
    {
        $ranking = Ranking::findOrFail($id);
        $ranking->delete();

        return redirect()->route('rankings.index')->with('success', 'Klassement is succesvol verwijderd.');
    }

    public function update(Request $request, Ranking $ranking)
    {
        // :Valideer de invoer
        $request->validate([
            'ploegnaam' => 'required|string|max:255',
            'aantal_matchen_gespeeld' => 'required|integer',
            'gewonnen' => 'required|integer',
            'verloren' => 'required|integer',
            'gelijkspel' => 'required|integer',
            'doelpunten_voor' => 'required|integer',
            'doelpunten_tegen' => 'required|integer',
            'doelpunten_verschil' => 'required|integer',
            'punten_behaald' => 'required|integer',
        ]);

        // Vul de gegevens van het model in met behulp van de invoer
        $ranking->ploegnaam = $request->ploegnaam;
        $ranking->aantal_matchen_gespeeld = $request->aantal_matchen_gespeeld;
        $ranking->gewonnen = $request->gewonnen;
        $ranking->verloren = $request->verloren;
        $ranking->gelijkspel = $request->gelijkspel;
        $ranking->doelpunten_voor = $request->doelpunten_voor;
        $ranking->doelpunten_tegen = $request->doelpunten_tegen;
        $ranking->doelpunten_verschil = $request->doelpunten_verschil;
        $ranking->punten_behaald = $request->punten_behaald;

        // Sla de wijzigingen op in de database
        $ranking->save();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('rankings.index')->with('success', 'Klassement is succesvol bijgewerkt.');
    }

}