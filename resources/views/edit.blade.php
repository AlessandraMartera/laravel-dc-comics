@extends('layouts.layout-main')

@section('content')
    <form class="container" method="POST" action="{{ route('update', $comic->id) }}">
        @csrf
        @method('put')

        <div class="my-3 row">
            <label class="col-6" for="title">Titolo</label>
            <input class="col-4" type="text" name="title" id="title" value="{{ $comic->title }}">
        </div>

        <div class="my-3 row">
            <label class="col-6" for="description">Descrizione</label>
            <input class="col-4" type="text" name="description" id="description" value="{{ $comic->description }}">
        </div>

        <div class="my-3 row">
            <label class="col-6" for="thumb">Path immagine</label>
            <input class="col-4" type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        </div>


        <div class="my-3 row">
            <label class="col-6" for="price">Prezzo</label>
            <input class="col-4" type="text" name="price" id="price" value="{{ $comic->price }}">
        </div>

        <div class="my-3 row">
            <label class="col-6" for="series">Serie</label>
            <input class="col-4" type="text" name="series" id="series" value="{{ $comic->series }}">
        </div>

        <div class="my-3 row">
            <label class="col-6" for="sale_date">data di vedendità</label>
            <input class="col-4" type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="my-3 row">
            <label class="col-6" for="type">tipo</label>
            <input class="col-4" type="text" name="type" id="type" value="{{ $comic->type }}">
        </div>

        <input class="my-5" type="submit" value="Aggiorna">
    </form>
@endsection
