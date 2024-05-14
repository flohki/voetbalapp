@extends('layouts.default')

@section('title', 'Klassement')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
@endsection

@section('content')
    <div class="container">
        <h2>Klassement</h2>
        @auth
            <a href="{{ route('rankings.create') }}" class="btn mb-2">Toevoegen</a>
        @endauth
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Ploegnaam</th>
                        <th>Aantal matchen gespeeld</th>
                        <th>Gewonnen</th>
                        <th>Verloren</th>
                        <th>Gelijkspel</th>
                        <th>D+</th>
                        <th>D-</th>
                        <th>D</th>
                        <th>Punten</th>
                        @auth
                            <th>Acties</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rankings as $ranking)
                        <tr>
                            <td>{{ $ranking->ploegnaam }}</td>
                            <td>{{ $ranking->aantal_matchen_gespeeld }}</td>
                            <td>{{ $ranking->gewonnen }}</td>
                            <td>{{ $ranking->verloren }}</td>
                            <td>{{ $ranking->gelijkspel }}</td>
                            <td>{{ $ranking->doelpunten_voor }}</td>
                            <td>{{ $ranking->doelpunten_tegen }}</td>
                            <td>{{ $ranking->doelpunten_verschil }}</td>
                            <td>{{ $ranking->punten_behaald }}</td>
                            @auth
                                <td>
                                    <form action="{{ route('rankings.destroy', $ranking->id) }}" method="POST">
                                        <a href="{{ route('rankings.edit', $ranking->id) }}"
                                            class="btn btn-primary">Bewerken</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                                    </form>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
