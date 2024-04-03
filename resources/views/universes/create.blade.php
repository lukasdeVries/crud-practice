@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>universes</h1>
            </div>
            <form action="{{ route('universe.store') }}" class="form" method="post">
                @csrf
                <input type="text" name="name" placeholder="Naam">
                <div class="form__bottom">
                    <input type="submit" value="Opslaan">
                </div>
            </form>
        </div>
    </div>
@endsection
