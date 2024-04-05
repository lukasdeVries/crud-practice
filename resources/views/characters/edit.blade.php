@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Karakters</h1>
            </div>
            <form class="form" action="{{ route('character.update', $character->id) }}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="Naam" value="{{ $character->name }}">
                <textarea name="description" rows="15" placeholder="Karakter omschrijving">{{ $character->description }}</textarea>
                <select name="country_id">
                    <option value="" disabled>Selecteer een land</option>
                    @foreach ($countrys as $country)
                        @if ($country->id === $character->country->id)
                            <option selected value="{{ $country->id }}">{{ $country->name }}</option>
                        @else
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endif
                    @endforeach
                </select>
                <div class="form__grid">
                    @foreach ($books as $book)
                        <div class="form__group form__group--horizontal">
                            <label for="book__{{ $book->id }}">{{ $book->title }}</label>
                            @if ($character->books->contains($book->id))
                                <input checked type="checkbox" name="books[]" id="book__{{ $book->id }}"
                                value="{{ $book->id }}">
                            @else 
                                <input type="checkbox" name="books[]" id="book__{{ $book->id }}"
                                value="{{ $book->id }}">
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="form__bottom">
                    <input type="submit" value="Oplsaan">
            </form>
            <form class="form form--delete" action="{{ route('character.destroy', $character->id) }}" method="post">
                @csrf
                @method('delete')
                <input class="button button--red" type="submit" value="Verwijderen">
            </form>
        </div>
    </div>
    </div>
@endsection
