<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<script src="{{ asset('js/header.js') }}"></script>

<header>
    <div class="logo">
        Logo
    </div>
    <nav>
        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="dropdown">
                <a href="#">Wedstrijden</a>
                <div class="dropdown-content">
                    <a href="{{ route('calenders.index') }}">Kalender</a>
                    <a href="{{ route('rankings.index') }}">Klassement</a>
                    <a href="{{ route('goals.index') }}">Goals</a>
                    <a href="{{ route('cards.index') }}">Kaarten</a>
                </div>
            </li>
        </ul>
        <div class="menu-toggle">&#9776;</div>
    </nav>
</header>
