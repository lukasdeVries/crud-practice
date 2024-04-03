@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Authors</h1>
            </div>
            <form action="{{ route('author.store') }}" class="form" method="post">
                @csrf
                <input type="text" name="name" placeholder="Naam">
                <div class="form__group">
                    <label for="date_of_birth">Geboorte datum</label>
                    <input type="date" name="date_of_birth">
                </div>
                <input type="text" name="nationality" placeholder="Afkomst">
                <div class="form__group form__group--horizontal">
                    <label for="is_alive">Leeft nog</label>
                    <input type="hidden" name="is_alive" value="0">
                    <input checked type="checkbox" name="is_alive" value="1">
                </div>
                <div class="form__group form__group--hidden">
                    <label for="date_of_death">Datum overlijden</label>
                    <input type="date" class="date_of_death" name="date_of_death">
                </div>
                <div class="form__bottom">
                    <input type="submit" value="Opslaan">
                </div>
            </form>
        </div>
    </div>
@endsection
