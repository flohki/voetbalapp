@extends('layouts.default')

@section('title', 'Contact')

@section('styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="contact-form">
        <h1>Contact</h1>

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form action="{{ route('club.submitContact') }}" method="POST">
            @csrf
            <div>
                <label for="first_name">Voornaam:</label>
                @error('first_name')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
            </div>
            <div>
                <label for="last_name">Achternaam:</label>
                @error('last_name')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
            </div>
            <div>
                <label for="email">E-mail:</label>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="email" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="phone">Telefoonnummer:</label>
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            </div>
            <div>
                <label for="subject">Onderwerp:</label>
                @error('subject')
                    <div class="error">{{ $message }}</div>
                @enderror
                <select id="subject" name="subject">
                    <option value="" disabled selected>Kies een onderwerp</option>
                    <option value="aanvraag">Aanvraag</option>
                    <option value="voorstel">Voorstel</option>
                    <option value="inlichtingen">Inlichtingen</option>
                    <option value="andere">Andere</option>
                </select>
            </div>
            <div>
                <label for="message">Bericht:</label>
                @error('message')
                    <div class="error">{{ $message }}</div>
                @enderror
                <textarea id="message" name="message">{{ old('message') }}</textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
@endsection
