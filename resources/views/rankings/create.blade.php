@extends('layouts.default')

@section('title', 'Klassement')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulier.css') }}">
@endsection


@section('content')
    <div class="container">
        <h2>Nieuw Klassement Toevoegen</h2>
        <form action="{{ route('rankings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ploegnaam">Ploegnaam:</label>
                <input type="text" class="form-control" id="ploegnaam" name="ploegnaam">
            </div>
            <div class="form-group">
                <label for="aantal_matchen_gespeeld">Aantal matchen gespeeld:</label>
                <input type="number" class="form-control" id="aantal_matchen_gespeeld" name="aantal_matchen_gespeeld">
            </div>
            <div class="form-group">
                <label for="gewonnen">Aantal matchen gewonnen:</label>
                <input type="number" class="form-control" id="gewonnen" name="gewonnen">
            </div>
            <div class="form-group">
                <label for="verloren">Aantal matchen verloren:</label>
                <input type="number" class="form-control" id="verloren" name="verloren">
            </div>
            <div class="form-group">
                <label for="gelijkspel">Aantal matchen gelijkspel:</label>
                <input type="number" class="form-control" id="gelijkspel" name="gelijkspel">
            </div>
            <div class="form-group">
                <label for="doelpunten_voor">Aantal doelpunten voor:</label>
                <input type="number" class="form-control" id="doelpunten_voor" name="doelpunten_voor">
            </div>
            <div class="form-group">
                <label for="doelpunten_tegen">Aantal doelpunten tegen:</label>
                <input type="number" class="form-control" id="doelpunten_tegen" name="doelpunten_tegen">
            </div>
            <div class="form-group">
                <label for="doelpunten_verschil">Aantal doelpunten verschil:</label>
                <input type="number" class="form-control" id="doelpunten_verschil" name="doelpunten_verschil">
            </div>
            <div class="form-group">
                <label for="punten_behaald">Aantal punten behaald:</label>
                <input type="number" class="form-control" id="punten_behaald" name="punten_behaald">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
