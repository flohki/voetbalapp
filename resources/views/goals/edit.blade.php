@extends('layouts.default')

@section('title', 'Goals')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulier.css') }}">
@endsection


@section('content')
    <div class="container">
        <h2>Spelers Bewerken</h2>
        <form action="{{ route('goals.update', $goal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="naam_speler">Naam speler:</label>
                <input type="text" class="form-control" id="naam_speler" name="naam_speler"
                    value="{{ $goal->naam_speler }}">
            </div>
            <div class="form-group">
                <label for="totaal_doelpunten">Totaal doelpunten:</label>
                <input type="text" class="form-control" id="totaal_doelpunten" name="totaal_doelpunten"
                    value="{{ $goal->totaal_doelpunten }}">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
