@extends('layouts.default')

@section('title', 'Home')

@section('styles')

@endsection


@section('content')
    <h1>Welkom op de homepage</h1>
    <ul>
        <li><a href="{{ route('rankings.index') }}">Klassementen</a></li>
        <li><a href="{{ route('calenders.index') }}">Kalenders</a></li>
        <li><a href="{{ route('goals.index') }}">Doelpunten</a></li>
        <li><a href="{{ route('cards.index') }}">Kaarten</a></li>
    </ul>
@endsection
