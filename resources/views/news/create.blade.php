@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulier.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Nieuw Artikel</h1>
        <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="content">Inhoud</label>
                <textarea id="content" name="content" class="form-control" required>{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label for="publication_date">Publicatiedatum</label>
                <input type="date" id="publication_date" name="publication_date" class="form-control"
                    value="{{ old('publication_date') }}" required>
            </div>
            <div class="form-group">
                <label for="image">Afbeelding</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Aanmaken</button>
        </form>
    </div>
@endsection
