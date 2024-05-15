@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nieuws.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Nieuws Overzicht</h1>
        @auth
            <a href="{{ route('news.create') }}" class="btn-extra">Nieuw Artikel</a>
        @endauth
        <div class="news-articles">
            @foreach ($newsArticles as $article)
                <div class="news-article">
                    <h2>{{ $article->title }}</h2>
                    @if ($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-thumbnail">
                    @endif
                    <p>{{ Str::limit($article->content, 200) }}</p>
                    <a href="{{ route('news.show', $article->id) }}" class="btn-extra">Lees meer</a>
                    <small>{{ $article->publication_date->format('d M Y') }}</small>
                    @auth
                        <div class="admin-actions">
                            <a href="{{ route('news.edit', $article->id) }}" class="btn btn-primary">Bewerken</a>
                            <form action="{{ route('news.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        </div>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
@endsection
