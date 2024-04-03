@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Boeken</h1>
                <a class="button button--blue" href="{{ route('book.create') }}">Nieuw boek</a>
            </div>
            <div class="page__grid">
                @foreach ($books as $book)
                <div class="book">
                    <p>{{ $book->title }}</p>
                    <p>{{ $book->author->name }}</p>
                    <p>{{ $book->universe->name }}</p>
                    <a class="edit" href="{{ route('book.edit', $book->id) }}"><span class="material-symbols-outlined">edit</span></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection