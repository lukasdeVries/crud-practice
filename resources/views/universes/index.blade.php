@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>universes</h1>
                <a class="button button--blue" href="{{ route('universe.create') }}">Nieuw universum</a>
            </div>
            <div class="page__grid">
                @foreach ($universes as $universe)
                    <div class="universe">
                        <p>{{ $universe->name }}</p>
                        <a class="edit" href="{{ route('universe.edit', $universe->id) }}"><span class="material-symbols-outlined">edit</span></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
