@extends('layouts.default')

@section('title', 'Goals')
<link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
@section('styles')

@endsection


@section('content')
    <div class="container">
        <h2>Doelpunten</h2>
        @auth
            <a href="{{ route('goals.create') }}" class="btn btn-success mb-2">Toevoegen</a>
        @endauth
        <table class="table">
            <thead>
                <tr>
                    <th>Naam speler</th>
                    <th>Totaal doelpunten</th>
                    @auth
                        <th>Acties</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($goals as $goal)
                    <tr>
                        <td>{{ $goal->naam_speler }}</td>
                        <td>{{ $goal->totaal_doelpunten }}</td>
                        @auth
                            <td>
                                <form action="{{ route('goals.destroy', $goal->id) }}" method="POST">
                                    <a href="{{ route('goals.edit', $goal->id) }}" class="btn btn-primary">Bewerken</a>
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
@endsection
