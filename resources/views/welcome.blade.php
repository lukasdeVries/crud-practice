@extends('layouts.page')

@section('content')
    <div class="home">
        <div class="banner">
            <div class="banner__overlay"></div>
            <div class="banner__img"><img src="{{ asset('storage/image/wp2151561.jpg') }}" alt="banner background"></div>
            <div class="banner__content">
                <h1 class="banner__title">De plek om informatie te verzamelen over mijn boeken</h1>
                <div class="dash dash--white"></div>
                <p class="banner__subtitle">Zodat ik niks meer zelf hoeft te onthouden</p>
            </div>
        </div>
        <div class="container">
            <div class="types">
                <div class="type">
                    <a href="{{ route('character.index') }}">
                        <div class="type__img type__img--top">
                            <div class="type__overlay"></div>
                            <img src="{{ asset('storage/image/logen.jpg') }}" alt="">
                        </div>
                        <div class="type__content">
                            <h3 class="type__header">characters</h3>
                            <div class="dash dash--grey"></div>
                            <div class="type__descriptor">Zie al je opgeslagen characters</div>
                        </div>
                    </a>
                </div>
                <div class="type">
                    <a href="{{ route('book.index') }}">
                        <div class="type__img">
                            <div class="type__overlay"></div>
                            <img src="{{ asset('storage/image/books.jpeg') }}" alt="">
                        </div>
                        <div class="type__content">
                            <h3 class="type__header">Boeken</h3>
                            <div class="dash dash--grey"></div>
                            <div class="type__descriptor">Zie alle boeken die je hebt gelezen</div>
                        </div>
                    </a>
                </div>
                <div class="type">
                    <a href="{{ route('universe.index') }}">
                        <div class="type__img">
                            <div class="type__overlay"></div>
                            <img src="{{ asset('storage/image/Map_roshar.webp') }}" alt="">
                        </div>
                        <div class="type__content">
                            <h3 class="type__header">Universums</h3>
                            <div class="dash dash--grey"></div>
                            <div class="type__descriptor">Zie alle verschillende universums</div>
                        </div>
                    </a>
                </div>
                <div class="type">
                    <a href="{{ route('author.index') }}">
                        <div class="type__img">
                            <div class="type__overlay"></div>
                            <img src="{{ asset('storage/image/typewriter.webp') }}" alt="">
                        </div>
                        <div class="type__content">
                            <h3 class="type__header">Auteurs</h3>
                            <div class="dash dash--grey"></div>
                            <div class="type__descriptor">Bekijk alle werken van de favoriet auteurs</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
