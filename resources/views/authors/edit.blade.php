@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Authors</h1>
            </div>
            <form action="{{ route('author.update', $author->id) }}" class="form" method="post">
                @csrf
                <input type="text" name="name" placeholder="Naam" value="{{ $author->name }}">
                <div class="form__group">
                    <label for="date_of_birth">Geboorte datum</label>
                    <input type="date" name="date_of_birth" value="{{ $author->date_of_birth }}">
                </div>
                <input type="text" name="nationality" placeholder="Afkomst" value="{{ $author->nationality }}">
                <div class="form__group form__group--horizontal">
                    <label for="is_alive">Leeft nog</label>
                    <input type="hidden" name="is_alive" value="0">
                    @if ($author->is_alive)
                        <input checked type="checkbox" name="is_alive" value="1">
                    @else
                        <input type="checkbox" name="is_alive" value="1">
                    @endif
                </div>
                @if ($author->is_alive)
                    <div class="form__group form__group--open">
                        <label for="date_of_death">Datum overlijden</label>
                        <input type="date" class="date_of_death" name="date_of_death"
                            value="{{ $author->date_of_death }}">
                    </div>
                @else
                    <div class="form__group form__group--hidden">
                        <label for="date_of_death">Datum overlijden</label>
                        <input type="date" class="date_of_death" name="date_of_death"
                            value="{{ $author->date_of_death }}">
                    </div>
                @endif
                <div class="form__bottom">
                    <input type="submit" value="Opslaan">
            </form>
            <form class="form--delete" action="{{ route('author.destroy', $author->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Verwijderen">
            </form>
        </div>
    </div>
    </div>
@endsection
