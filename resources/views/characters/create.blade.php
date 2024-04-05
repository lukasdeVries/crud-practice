@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Karakters</h1>
            </div>
            <form class="form" action="{{ route('character.store') }}" method="POST">
                @csrf
                <input required maxlength="255" type="text" name="name" placeholder="Naam">
                <textarea name="description" rows="15" placeholder="Karakter omschrijving"></textarea>
                <select required name="country_id" >
                    <option value="" selected disabled>Selecteer een land</option>
                    @foreach ($countrys as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <div class="form__grid">
                    @foreach ($books as $book)
                    <div class="form__group form__group--horizontal">
                        <label for="book__{{ $book->id }}">{{ $book->title }}</label>
                        <input type="checkbox" value="{{ $book->id }}" name="boeken[]" id="boek__{{ $book->id }}">
                    </div>
                    @endforeach
                </div>
                <div class="form__bottom">
                    <input type="submit" value="Oplsaan">
                </div>
            </form>
        </div>
    </div>
@endsection