@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Boeken</h1>
                <a class="button button--blue" href="{{ route('book.create') }}">Nieuw boek</a>
            </div>
            <div class="book__grid">
                @foreach ($books as $book)
                <div class="book">
                    <a href="{{ route('book.edit', $book->id) }}">
                        <p class="book__title">{{ $book->title }}</p>
                        <p class="book__author">{{ $book->author->name }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection