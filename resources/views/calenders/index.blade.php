@extends('layouts.default')

@section('title', 'Kalender')

@section('styles')

@endsection


@section('content')
    <div class="container">
        <h2>Kalenders</h2>
        <a href="{{ route('calenders.create') }}" class="btn btn-success mb-2">Toevoegen</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Startuur</th>
                    <th>Thuisploeg</th>
                    <th>Uitploeg</th>
                    <th>uitslag</th>
                    <th>Verslag</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calenders as $calender)
                    <tr>
                        <td>{{ $calender->date }}</td>
                        <td>{{ $calender->startuur }}</td>
                        <td>{{ $calender->thuisploeg }}</td>
                        <td>{{ $calender->uitploeg }}</td>
                        <td>{{ $calender->uitslag }}</td>
                        <td>{{ $calender->verslag_path }}</td>
                        <td>
                            <form action="{{ route('calenders.destroy', $calender->id) }}" method="POST">
                                <a href="{{ route('calenders.edit', $calender->id) }}" class="btn btn-primary">Bewerken</a>
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
