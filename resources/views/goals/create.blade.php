@extends('layouts.default')

@section('title', 'Goals')

@section('styles')

@endsection


@section('content')
    <div class="container">
        <h2>Nieuwe Speler Toevoegen</h2>
        <form action="{{ route('goals.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="naam_speler">Naam speler:</label>
                <input type="text" class="form-control" id="naam_speler" name="naam_speler">
            </div>
            <div class="form-group">
                <label for="totaal_doelpunten">Totaal doelpunten:</label>
                <input type="text" class="form-control" id="totaal_doelpunten" name="totaal_doelpunten">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
