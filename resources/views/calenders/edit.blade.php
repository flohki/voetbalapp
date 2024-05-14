@extends('layouts.default')

@section('title', 'Kalender')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <h2>Kalender Bewerken</h2>
        <form action="{{ route('calenders.update', $calender->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="date">Datum:</label>
                <input type="text" class="form-control" id="date" name="date" value="{{ $calender->date }}">
            </div>
            <div class="form-group">
                <label for="startuur">Startuur:</label>
                <input type="time" class="form-control" id="startuur" name="startuur" value="{{ $calender->startuur }}">
            </div>
            <div class="form-group">
                <label for="thuisploeg">Thuisploeg:</label>
                <input type="input" class="form-control" id="thuisploeg" name="thuisploeg"
                    value="{{ $calender->thuisploeg }}">
            </div>
            <div class="form-group">
                <label for="uitploeg">Uitploeg:</label>
                <input type="input" class="form-control" id="uitploeg" name="uitploeg" value="{{ $calender->uitploeg }}">
            </div>
            <div class="form-group">
                <label for="uitslag">Uitslag:</label>
                <input type="input" class="form-control" id="uitslag" name="uitslag" value="{{ $calender->uitslag }}">
            </div>
            <div class="form-group">
                <label for="verslag_path">Verslag:</label>
                <input type="input" class="form-control" id="verslag_path" name="verslag_path"
                    value="{{ $calender->verslag_path }}">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
