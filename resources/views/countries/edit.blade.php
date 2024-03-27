@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <form action="{{ route('country.update', $country->id) }}" class="form" method="post">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="Naam" value="{{ $country->name }}">
                <select name="universe_id">
                    <option value="" disabled>Kies een universum</option>
                    @foreach ($universes as $universe)
                        @if ($universe->id === $country->universe->id)
                            <option selected value="{{ $universe->id }}">{{ $universe->name }}</option>
                        @else
                            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                        @endif
                    @endforeach
                </select>
                <div class="form__bottom">
                    <input type="submit" value="Oplsaan">
            </form>
                <form class="form--delete" action="{{ route('country.destroy', $country->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Verwijderen">
            </form>
                </div>
        </div>
    </div>
@endsection
