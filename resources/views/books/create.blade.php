@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Boeken</h1>
                <a class="button button--blue" href="{{ route('book.create') }}">Nieuw boek</a>
            </div>
            <form class="form" action="{{ route('book.store') }}" method="post">
                @csrf
                <input type="text" name="title" placeholder="Titel">
                <select name="universe_id">
                    <option value="" selected disabled>Selecteer een universum</option>
                    @foreach ($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                    @endforeach
                </select>
                <select name="author_id">
                    <option value="" selected disabled>Selecteer een autheur</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                <div class="form__bottom">
                    <input type="submit" value="Opslaan">
                </div>
            </form>
        </div>
    </div>
@endsection