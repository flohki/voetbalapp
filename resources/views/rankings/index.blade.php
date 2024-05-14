@extends('layouts.default')

@section('title', 'Klassement')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <h2>Klassement</h2>
        <a href="{{ route('rankings.create') }}" class="btn btn-success mb-2">Toevoegen</a>
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
                    <th>Acties</th>
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
                        <td>
                            <form action="{{ route('rankings.destroy', $ranking->id) }}" method="POST">
                                <a href="{{ route('rankings.edit', $ranking->id) }}" class="btn btn-primary">Bewerken</a>
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
