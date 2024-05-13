@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>Doelpunten</h2>
        <a href="{{ route('goals.create') }}" class="btn btn-success mb-2">Toevoegen</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Naam speler</th>
                    <th>Totaal doelpunten</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($goals as $goal)
                    <tr>
                        <td>{{ $goal->naam_speler }}</td>
                        <td>{{ $goal->totaal_doelpunten }}</td>
                        <td>
                            <form action="{{ route('goals.destroy', $goal->id) }}" method="POST">
                                <a href="{{ route('goals.edit', $goal->id) }}" class="btn btn-primary">Bewerken</a>
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
