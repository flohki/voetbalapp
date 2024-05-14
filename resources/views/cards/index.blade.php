@extends('layouts.default')

@section('title', 'Kaarten')
<link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
@section('styles')

@endsection

@section('content')
    <div class="container">
        <h2>Kaarten</h2>
        <a href="{{ route('cards.create') }}" class="btn btn-success mb-2">Toevoegen</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Naam speler</th>
                    <th>Gele kaart</th>
                    <th>Twee keer geel</th>
                    <th>Rode kaart</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cards as $card)
                    <tr>
                        <td>{{ $card->naam_speler }}</td>
                        <td>{{ $card->gele_kaart }}</td>
                        <td>{{ $card->twee_geel }}</td>
                        <td>{{ $card->rode_kaart }}</td>
                        <td>
                            <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                                <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-primary">Bewerken</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
