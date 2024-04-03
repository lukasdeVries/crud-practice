@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="page">
            <div class="page__top">
                <h1>Authors</h1>
                <a href="{{ route('author.create') }}" class="button button--blue">Nieuwe autheur</a>
            </div>
            <div class="page__grid">
                @foreach ($authors as $author)
                    <p>{{ $author->name }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection