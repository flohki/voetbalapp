@extends('layouts.default')

@section('title', 'Kaarten')

@section('styles')

@endsection


@section('content')
    <div class="container">
        <h2>Spelers Bewerken</h2>
        <form action="{{ route('cards.update', $card->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="naam_speler">Naam speler:</label>
                <input type="text" class="form-control" id="naam_speler" name="naam_speler" value="{{ $card->naam_speler }}">
            </div>
            <div class="form-group">
                <label for="gele_kaart">Gele kaarten:</label>
                <input type="text" class="form-control" id="gele_kaart" name="gele_kaart"
                    value="{{ $card->gele_kaart }}">
            </div>
            <div class="form-group">
                <label for="twee_geel">2x geel:</label>
                <input type="text" class="form-control" id="twee_geel" name="twee_geel" value="{{ $card->twee_geel }}">
            </div>
            <div class="form-group">
                <label for="rode_kaart">Rode kaarten:</label>
                <input type="text" class="form-control" id="rode_kaart" name="rode_kaart"
                    value="{{ $card->rode_kaart }}">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
