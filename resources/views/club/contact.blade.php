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
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
            </div>
            <div>
                <label for="last_name">Achternaam:</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="phone">Telefoonnummer:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
            </div>
            <div>
                <label for="subject">Subject:</label>
                <select id="subject" name="subject" required>
                    <option value="request">Aanvraag</option>
                    <option value="proposal">Voorstel</option>
                    <option value="information">Inlichtingen</option>
                    <option value="other">Andere</option>
                </select>
            </div>
            <div>
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" required>{{ old('message') }}</textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
@endsection
