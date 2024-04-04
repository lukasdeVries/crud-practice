@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="character-page">
            <div class="character-page__top">
                <h1>Karakters</h1>
            </div>
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
            <div class="form__bottom">
                <input type="submit" value="Oplsaan">
            </div>
        </form>
    </div>
@endsection