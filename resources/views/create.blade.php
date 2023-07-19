@extends('layouts.layout-main')

@section('content')
    <form class="container" method="POST" action="{{ route('store') }}">
        @csrf

        <div class="my-3 row">
            <label class="col-5" for="title">Titolo</label>
            <input class="col-3" type="text" name="title">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="my-3 row">
            <label class="col-5" for="description">Descrizione</label>
            <input class="col-3" type="text" name="description">

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3 row">
            <label class="col-5" for="thumb">Path immagine</label>
            <input class="col-3" type="text" name="thumb">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3 row">
            <label class="col-5" for="price">Prezzo</label>
            <input class="col-3" type="text" name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3 row">
            <label class="col-5" for="series">Serie</label>
            <input class="col-3" type="text" name="series">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3 row">
            <label class="col-5" for="sale_date">data di vedendità</label>
            <input class="col-3" type="text" name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-3 row">
            <label class="col-5" for="type">tipo</label>
            <input class="col-3" type="text" name="type">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Aggiungi">
    </form>
@endsection
