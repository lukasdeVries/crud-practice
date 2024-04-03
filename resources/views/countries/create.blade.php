@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Universum</h1>
            </div>
            <form action="{{ route('country.store') }}" class="form" method="post">
                @csrf 
                <input type="text" name="name" placeholder="Naam">
                <select name="universe_id">
                    <option value="" selected disabled>Kies een universum</option>
                    @foreach ($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                    @endforeach    
                </select>   
                <div class="form__bottom">
                    <input type="submit" value="Oplsaan">
                </div>
            </form>
        </div>
    </div>
@endsection