@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nieuws.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="news-article">
            <h1>{{ $newsArticle->title }}</h1>
            <small>{{ $newsArticle->publication_date->format('d M Y') }}</small>
            @if ($newsArticle->image)
                <img src="{{ asset('storage/' . $newsArticle->image) }}" alt="{{ $newsArticle->title }}" class="img-thumbnail"
                    style="max-width: 100%;">
            @endif
            <p>{{ $newsArticle->content }}</p>
            @auth
                <div class="admin-actions">
                    <a href="{{ route('news.edit', $newsArticle->id) }}" class="btn btn-primary">Bewerken</a>
                    <form action="{{ route('news.destroy', $newsArticle->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
@endsection
