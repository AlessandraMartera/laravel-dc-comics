@extends('layouts.layout-main')

@section('content')
    <form class="text-center" method="POST" action="{{ route('update', $comic->id) }}">
        @csrf
        @method('put')

        <div class="my-3">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $comic->title }}">
        </div>

        <div class="my-3">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{ $comic->description }}">
        </div>

        <div class="my-3">
            <label for="thumb">Path immagine</label>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        </div>


        <div class="my-3">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{ $comic->price }}">
        </div>

        <div class="my-3">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{ $comic->series }}">
        </div>

        <div class="my-3">
            <label for="sale_date">data di vedendità</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="my-3">
            <label for="type">tipo</label>
            <input type="text" name="type" id="type" value="{{ $comic->type }}">
        </div>

        <input type="submit" value="Aggiungi">
    </form>
@endsection
