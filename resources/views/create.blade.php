@extends('template/layout')

@section('title', 'Creazione post')

@section('content')
    <form action="{{ route('store') }}" method="post">
        @csrf
        @method('POST')
        <label for="text">Testo</label>
        <textarea name="text" id="text" placeholder="Inserisci un testo" cols="30"></textarea>

        <label for="author">Autore</label>
        <input type="text" name="author" id="author" placeholder="Inserisci il nome dell'autore">

        @if ($tags != null)
            @foreach ($tags as $tag)
                <div>
                    <label for="{{ $tag->slug }}">{{ $tag->name }}</label>
                    <input type="checkbox" name="tags[]" id="{{ $tag->slug }}" value="{{ $tag->id }}">
                </div>
            @endforeach
        @else
            <p>Non ci sono tag</p>
        @endif

        <div class="buttons">
            <input type="submit" value="Aggiungi" class="btn-blue">
            <a href="{{ route('index') }}" class="btn-blue">Torna alla home</a>
        </div>
    </form>
@stop