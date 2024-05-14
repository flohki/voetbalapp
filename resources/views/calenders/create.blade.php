@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>Nieuwe Kalender Toevoegen</h2>
        <form action="{{ route('calenders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Datum:</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="dd-mm-yyyy">
            </div>
            <div class="form-group">
                <label for="startuur">Startuur:</label>
                <input type="time" class="form-control" id="startuur" name="startuur">
            </div>
            <div class="form-group">
                <label for="thuisploeg">Thuisploeg:</label>
                <input type="input" class="form-control" id="thuisploeg" name="thuisploeg">
            </div>
            <div class="form-group">
                <label for="uitploeg">Uitploeg:</label>
                <input type="input" class="form-control" id="uitploeg" name="uitploeg">
            </div>
            <div class="form-group">
                <label for="uitslag">Uitslag:</label>
                <input type="input" class="form-control" id="uitslag" name="uitslag">
            </div>
            <div class="form-group">
                <label for="verslag_path">Verslag:</label>
                <input type="input" class="form-control" id="verslag_path" name="verslag_path">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection