@extends('layouts.default')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="welcome-section">
            <img src="{{ asset('images/logo-kvvhz.png') }}" alt="Logo K.V.V. Heusden-Zolder" class="logo">
            <h1>Welkom bij K.V.V. Heusden-Zolder</h1>
            <p>Welkom op de officiële website van K.V.V. Heusden-Zolder. Hier vind je alle informatie over onze club, teams,
                wedstrijden en nog veel meer!</p>
        </div>

        <div class="slider-section">
            <div class="slider">
                <div class="slide active">
                    <img src="{{ asset('images/voetbalwedstrijd.jpg') }}" alt="Voetbalwedstrijd">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/voetbalduel.jpg') }}" alt="Voetbalduel">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/voetbaltruc.jpg') }}" alt="Voetbaltruc">
                </div>
            </div>
        </div>

        <div class="content-section">
            <div class="links-section">
                <h2>Contacteer Ons</h2>
                <p>Heb je vragen of wil je meer informatie over onze club? Neem gerust contact met ons op via ons
                    contactformulier. We horen graag van je!</p>
                <a href="{{ route('club.contact') }}" class="btn btn-primary">Ga naar Contactformulier</a>

                <h2>Onze Locatie</h2>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.375836412004!2d5.305609816109424!3d50.98295267954621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c126ad7c785d9d%3A0xe7c172e99461e8d!2sNieuwe%20Dijk%2C%203550%20Heusden-Zolder%2C%20Belgium!5e0!3m2!1sen!2sus!4v1626948592840!5m2!1sen!2sus"
                        width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="news-section">
                <h2>Laatste Nieuws</h2>
                @foreach ($newsArticles as $article)
                    <div class="news-article">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ Str::limit($article->content, 100) }}</p>
                        <a href="{{ route('news.show', $article->id) }}">Lees meer</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/slider.js') }}" defer></script>
@endsection
