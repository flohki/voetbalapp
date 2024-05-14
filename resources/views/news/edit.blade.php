@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/formulier.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Artikel Bewerken</h1>
        <form method="POST" action="{{ route('news.update', $newsArticle->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', $newsArticle->title) }}">
            </div>
            <div class="form-group">
                <label for="content">Inhoud</label>
                <textarea id="content" name="content" class="form-control">{{ old('content', $newsArticle->content) }}</textarea>
            </div>
            <div class="form-group">
                <label for="publication_date">Publicatiedatum</label>
                <input type="date" id="publication_date" name="publication_date" class="form-control"
                    value="{{ old('publication_date', $newsArticle->publication_date->format('Y-m-d')) }}">
            </div>
            <div class="form-group">
                <label for="image">Afbeelding</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($newsArticle->image)
                    <img src="{{ asset('storage/' . $newsArticle->image) }}" alt="{{ $newsArticle->title }}"
                        class="img-thumbnail mt-2" style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Bijwerken</button>
        </form>
    </div>
@endsection
