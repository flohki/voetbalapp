<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function create()
    {
        return view('cards.create');
    }

    public function store(Request $request)
    {
         // Valideer de invoer
        $request->validate([
            'naam_speler' => 'required|string|max:255',
            'gele_kaart' => 'required|integer',
            'twee_geel' => 'required|integer',
            'rode_kaart' => 'required|integer',
        ]);

        // Maak een nieuwe instantie van het model
        $card = new Card();

        // Vul de gegevens van het model in met behulp van de invoer
        $card->naam_speler = $request->naam_speler;
        $card->gele_kaart = $request->gele_kaart;
        $card->twee_geel = $request->twee_geel;
        $card->rode_kaart = $request->rode_kaart;

        //slaat de info ingegeven op
        $card->save();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('cards.index')->with('success', 'succesvol toegevoegd.');
    }

    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    public function update(Request $request, Card $card)
    {
        $request->validate([
            'naam_speler' => 'required|string|max:255',
            'gele_kaart' => 'required|integer',
            'twee_geel' => 'required|integer',
            'rode_kaart' => 'required|integer',
        ]);

        $card->naam_speler = $request->naam_speler;
        $card->gele_kaart = $request->gele_kaart;
        $card->twee_geel = $request->twee_geel;
        $card->rode_kaart = $request->rode_kaart;

        $card->save();

        return redirect()->route('cards.index')->with('success', 'succesvol bijgewerkt.');
    }

    public function destroy($id)
    {
        $card = Card::findOrFail($id);
        $card->delete();

        return redirect()->route('cards.index')->with('success', 'succesvol verwijderd.');
    }
}