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

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3">
            <label for="thumb">Path immagine</label>
            <input type="text" name="thumb">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3">
            <label for="price">Prezzo</label>
            <input type="text" name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3">
            <label for="series">Serie</label>
            <input type="text" name="series">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3">
            <label for="sale_date">data di vedendità</label>
            <input type="text" name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3">
            <label for="type">tipo</label>
            <input type="text" name="type">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Aggiungi">
    </form>
@endsection
