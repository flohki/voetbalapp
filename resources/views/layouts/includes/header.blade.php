<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<script src="{{ asset('js/header.js') }}" defer></script> <!-- defer toegevoegd om het laden uit te stellen tot de pagina klaar is -->

<header>
    <nav>
        <ul class="sidebar">
            <li onclick="hideSidebar()">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                        <path
                            d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                    </svg>
                </a>
            </li>
            <li><a href="{{ route('club.index') }}">Clubinfo</a></li>
            <li><a href="{{ route('club.contact') }}">Contact</a></li>
            <li class="dropdown">
                <a href="#">Wedstrijden</a>
                <ul class="dropdown-content">
                    <li><a href="{{ route('calenders.index') }}">Kalender</a></li>
                    <li><a href="{{ route('rankings.index') }}">Klassement</a></li>
                    <li><a href="{{ route('goals.index') }}">Goals</a></li>
                    <li><a href="{{ route('cards.index') }}">Kaarten</a></li>
                </ul>
            </li>
        </ul>
        <ul>
            <li><a href="{{ route('home') }}">Voetbalclub</a></li>
            <li class="hideOnMobile"><a href="{{ route('club.index') }}">Clubinfo</a></li>
            <li><a href="{{ route('club.contact') }}">Contact</a></li>
            <li class="dropdown hideOnMobile">
                <a href="#">Wedstrijden</a>
                <ul class="dropdown-content">
                    <li><a href="{{ route('calenders.index') }}">Kalender</a></li>
                    <li><a href="{{ route('rankings.index') }}">Klassement</a></li>
                    <li><a href="{{ route('goals.index') }}">Goals</a></li>
                    <li><a href="{{ route('cards.index') }}">Kaarten</a></li>
                </ul>
            </li>
            <li class="menu-button" onclick="showSidebar()">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                        <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</header>
