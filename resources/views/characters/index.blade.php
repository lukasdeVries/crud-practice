@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Karakters</h1>
                <a href="{{ route('character.create') }}" class="button button--blue">Nieuw karakter</a>
            </div>
            <div class="page__grid">
                @foreach ($characters as $character)
                    <div class="character">
                        <div class="character__info">
                            <p class="character__name">{{ $character->name }}</p>
                            <p class="character__description">{{ $character->description }}</p>
                            <p class="character__country">{{ $character->country->name }}</p>
                        </div>
                        <a class="edit" href="{{ route('character.edit', $character->id) }}">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
