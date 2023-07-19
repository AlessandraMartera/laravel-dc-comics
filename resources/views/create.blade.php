@extends('layouts.layout-main')

@section('content')
    <form class="text-center" method="POST" action="{{ route('store') }}">
        @csrf

        <div class="my-3">
            <label for="title">Titolo</label>
            <input type="text" name="title">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="my-3">
            <label for="description">Descrizione</label>
            <input type="text" name="description">
        </div>

        <div class="my-3">
            <label for="thumb">Path immagine</label>
            <input type="text" name="thumb">
        </div>

        <div class="my-3">
            <label for="price">Prezzo</label>
            <input type="text" name="price">
        </div>

        <div class="my-3">
            <label for="series">Serie</label>
            <input type="text" name="series">
        </div>

        <div class="my-3">
            <label for="sale_date">data di vedendità</label>
            <input type="text" name="sale_date">
        </div>

        <div class="my-3">
            <label for="type">tipo</label>
            <input type="text" name="type">
        </div>

        <input type="submit" value="Aggiungi">
    </form>
@endsection
