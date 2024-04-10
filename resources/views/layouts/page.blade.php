<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Character sheet</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1 class="header__title"><a href="{{ route('home') }}">Character storage</a></h1>
            <ul class="header__nav">
                <li class="header__link"><a href="{{ route('character.index') }}">Karakters</a></li>
                <li class="header__link"><a href="{{ route('country.index') }}">Landen</a></li>
                <li class="header__link"><a href="{{ route('book.index') }}">Boeken</a></li>
                <li class="header__link"><a href="{{ route('universe.index') }}">Universums</a></li>
                <li class="header__link"><a href="{{ route('author.index') }}">Auteurs</a></li>
                @if (!auth()->check())
                    <li class="header__link"><a href="{{ route('dashboard') }}">Login</a></li>
                @else
                    <li class="header__link">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <ul class="nav">
                <li class="nav__link"><a href="{{ route('character.index') }}">Karakters</a></li>
                <li class="nav__link"><a href="{{ route('country.index') }}">Landen</a></li>
                <li class="nav__link"><a href="{{ route('book.index') }}">Boeken</a></li>
                <li class="nav__link"><a href="{{ route('universe.index') }}">Universums</a></li>
                <li class="nav__link"><a href="{{ route('author.index') }}">Auteurs</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
