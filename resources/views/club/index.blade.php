@extends('layouts.default')

@section('title', 'Clubinfo')

@section('styles')
    <link href="{{ asset('css/accordion.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-header">Info</button>
            <div class="accordion-content">
                <p>Hier komt de informatie over de club.</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Terreinen</button>
            <div class="accordion-content">
                <p>Hier komt informatie over de terreinen.</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Feestzaal</button>
            <div class="accordion-content">
                <p>Hier komt informatie over de feestzaal.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/accordion.js') }}"></script>
@endsection
