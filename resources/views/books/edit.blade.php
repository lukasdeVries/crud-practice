@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>{{ $book->title }}</h1>
            </div>
            <form class="form" action="{{ route('book.update', $book->id) }}" method="post">
                @csrf
                @method('put')
                <input type="text" name="title" placeholder="Titel" value="{{ $book->title }}">
                <select name="universe_id">
                    <option value="" disabled>Selecteer een universum</option>
                    @foreach ($universes as $universe)
                        @if ($book->universe->id === $universe->id)
                            <option selected value="{{ $universe->id }}">{{ $universe->name }}</option>
                        @else
                            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                        @endif
                    @endforeach
                </select>
                <select name="author_id">
                    <option value="" disabled>Selecteer een autheur</option>
                    @foreach ($authors as $author)
                        <option selected value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                <div class="form__bottom">
                    <input type="submit" value="Opslaan">
            </form>
                    <form class="form--delete" action="{{ route('book.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Verwijderen">
                    </form>
                </div>
        </div>
    </div>
@endsection
