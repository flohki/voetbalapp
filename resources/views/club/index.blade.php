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
                <p><strong>Historiek</strong></p>
                <p>KVV Heusden-Zolder is een Belgische voetbalclub uit Heusden-Zolder. De club is aangesloten bij de KBVB
                    met stamnummer 4104 en heeft groen en geel als kleuren.</p>
                <p>In 1936 werd Voetbalvereeniging Heusden opgericht, dat in 1937 bij de Belgische Voetbalbond werd
                    aangesloten. De club speelde aanvankelijk in de provinciale reeksen. In 1947 werd de naam Koninklijke
                    Voetbalvereeniging Heusden aangenomen.</p>
                <p><strong>Fusie</strong></p>
                <p>In 1995 fusioneerde de club met K Helzold FC, een andere club uit de gemeente. K Helzold FC speelde met
                    stamnummer 3908. De fusieclub ging verder met het stamnummer van KVV Heusden.</p>
                <p><strong>Stamnummer</strong></p>
                <p>Bij de fusie werd het stamnummer van K Helzold FC (3908) geschrapt. De fusieclub speelde verder met het
                    stamnummer van KVV Heusden (4104).</p>
                <p><strong>Accommodatie</strong></p>
                <p>De club speelt zijn thuiswedstrijden op het sportcomplex <a
                        href="https://www.google.com/maps/place/De+Nieuwe+Dijk,+Heusden-Zolder,+Belgium" target="_blank">De
                        Nieuwe
                        Dijk</a></p> in Heusden-Zolder. Het stadion
                biedt plaats aan 2.000 toeschouwers, waarvan 500 zitplaatsen.</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Terreinen</button>
            <div class="accordion-content">
                <p><strong>Terreinen</strong></p>
                <p>De voetbalclub beschikt over meerdere terreinen op het sportcomplex De Nieuwe Dijk:</p>
                <ul>
                    <li>Hoofdterrein: Dit is het hoofdterrein waar de officiële wedstrijden van het eerste elftal worden
                        gespeeld. Het terrein is voorzien van een tribune met zitplaatsen voor 500 toeschouwers en
                        staanplaatsen voor 1500 toeschouwers.</li>
                    <li>Oefenterreinen: Naast het hoofdterrein zijn er diverse oefenterreinen waar de jeugd- en
                        seniorenploegen trainen en spelen. Deze velden zijn goed onderhouden en voorzien van de nodige
                        faciliteiten om optimaal te kunnen trainen.</li>
                    <li>Kunstgrasveld: Voor de jeugd en specifieke trainingssessies beschikt de club ook over een
                        kunstgrasveld. Dit veld is het hele jaar door bespeelbaar en biedt een uitstekend alternatief bij
                        slechte weersomstandigheden.</li>
                </ul>
                <p>Het complex beschikt verder over kleedkamers, een kantine en voldoende parkeergelegenheid voor zowel
                    spelers als supporters.</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Feestzaal</button>
            <div class="accordion-content">
                <p><strong>Feestzaal</strong></p>
                <p>De feestzaal van KVV Heusden-Zolder is de ideale locatie voor allerlei evenementen en vieringen. Of het
                    nu gaat om een verjaardagsfeest, een trouwfeest, een bedrijfsbijeenkomst of een andere speciale
                    gelegenheid, de feestzaal biedt een sfeervolle en ruime accommodatie.</p>
                <p><strong>Faciliteiten</strong></p>
                <p>De zaal is voorzien van alle moderne faciliteiten om uw evenement tot een succes te maken:</p>
                <ul>
                    <li>Ruime zaal met een capaciteit van 200 personen</li>
                    <li>Volledig uitgeruste keuken</li>
                    <li>Bar met koelfaciliteiten</li>
                    <li>Audio- en visuele apparatuur</li>
                    <li>Ruime parking</li>
                </ul>
                <p><strong>Reserveringen</strong></p>
                <p>Voor meer informatie of om de feestzaal te reserveren, kunt u contact opnemen met:</p>
                <ul>
                    <li><strong>Naam:</strong> Jeuris Mathieu</li>
                    <li><strong>Adres:</strong> De Rieten 22, 3550 Heusden-Zolder</li>
                    <li><strong>Telefoon:</strong> 011/57 27 01, 0473/70 98 88</li>
                </ul>
                <p>
                    <a href="{{ route('club.contact') }}" class="btn">Contacteer ons !</a>
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/accordion.js') }}" defer></script>
@endsection
