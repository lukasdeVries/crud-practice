@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Landen</h1>
                <a href="{{ route('country.create') }}" class="button button--blue">Nieuw Land<span class="material-symbols-outlined">add_circle</span></a>
            </div>
            <div class="page__grid page__grid--countries">
                @foreach ($countries as $country)
                <div class="country">
                    <div class="country__info">
                        <p class="country__name">{{ $country->name }}</p>
                        <p class="country__universe">{{ $country->universe->name }}</p>
                    </div>
                    <a class="edit" href="{{ route('country.edit', $country->id) }}"><span class="material-symbols-outlined">edit</span></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
