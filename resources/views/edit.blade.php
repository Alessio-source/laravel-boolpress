@extends('template/layout')

@section('title', 'Modifica post')

@section('content')
    <form action="{{ route('blog.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="text">Testo</label>
        <textarea name="text" id="text" placeholder="Inserisci un testo" cols="30">{{ $post->text }}</textarea>

        <label for="author">Autore</label>
        <input type="text" name="author" id="author" placeholder="Inserisci il nome dell'autore" value="{{ $post->author }}">

        @if ($tags != null)
            @foreach ($tags as $tag)
                <div>
                    <label for="{{ $tag->slug }}">{{ $tag->name }}</label>
                    <input @if ($post->tags->contains($tag->id)) checked @endif type="checkbox" name="tags[]" id="{{ $tag->slug }}" value="{{ $tag->id }}">
                </div>
            @endforeach
        @else
            <p>Non ci sono tag</p>
        @endif

        <div class="buttons">
            <input type="submit" value="Modifica" class="btn-blue">
            <a href="{{ route('blog.index') }}" class="btn-blue">Torna alla home</a>
        </div>
    </form>
@stop