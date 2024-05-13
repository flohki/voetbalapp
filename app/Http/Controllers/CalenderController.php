<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index()
    {
        $calenders = Calender::all();
        return view('calenders.index', compact('calenders'));
    }
    public function create()
    {
        return view('calenders.create');
    }
    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'date' => 'required|date_format:d-m-Y',
            'startuur' => 'required|date_format:H:i',
            'thuisploeg' => 'required|string|max:255',
            'uitploeg' => 'required|string|max:255',
            'uitslag' => 'required|string|max:255',
            'verslag_path' => 'nullable|url',
        ]);

        $inputDate = $request->input('date');
        $formattedDate = Carbon::createFromFormat('d-m-Y', $inputDate)->format('Y-m-d');

        // Maak een nieuwe instantie van het model
        $calender = new Calender();

        // Vul de gegevens van het model in met behulp van de invoer
        $calender->date = $formattedDate;
        $calender->startuur = $request->startuur;
        $calender->thuisploeg = $request->thuisploeg;
        $calender->uitploeg = $request->uitploeg;
        $calender->uitslag = $request->uitslag;
        $calender->verslag_path = $request->verslag_path;

        // Sla het model op
        $calender->save();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('calenders.index')->with('success', 'Kalender is succesvol toegevoegd.');
    }

    public function edit(Calender $calender)
    {
        return view('calenders.edit', compact('calender'));
    }

    public function destroy($id)
    {
        $calender = Calender::findOrFail($id);
        $calender->delete();

        return redirect()->route('calenders.index')->with('success', 'Kalender is succesvol verwijderd.');
    }

    public function update(Request $request, Calender $calender)
    {
        // Valideer de invoer
        $request->validate([
            'date' => 'required|date_format:d-m-Y',
            'startuur' => 'required|date_format:H:i',
            'thuisploeg' => 'required|string|max:255',
            'uitploeg' => 'required|string|max:255',
            'uitslag' => 'required|string|max:255',
            'verslag_path' => 'nullable|url',
        ]);

        // Formatteren van de datum
        $inputDate = $request->input('date');
        $formattedDate = Carbon::createFromFormat('d-m-Y', $inputDate)->format('Y-m-d');

        // Vul de gegevens van het model in met behulp van de invoer
        $calender->date = $formattedDate;
        $calender->startuur = $request->startuur;
        $calender->thuisploeg = $request->thuisploeg;
        $calender->uitploeg = $request->uitploeg;
        $calender->uitslag = $request->uitslag;
        $calender->verslag_path = $request->verslag_path;

        // Sla de wijzigingen op in de database
        $calender->save();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('calenders.index')->with('success', 'Kalender is succesvol bijgewerkt.');
    }
}