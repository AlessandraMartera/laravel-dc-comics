@extends('layouts.layout-main')

@section('content')
    <div class="show container">

        <h1>{{ $comic['title'] }}</h1>

        <div>
            {{ $comic['price'] }}
        </div>

        <div class="info">
            <img src="{{ $comic['thumb'] }}" alt="">

            <p>
                {{ $comic['description'] }}
            </p>
        </div>

        <div class="row my-5">
            <span class="col-3">
                serie:
                {{ $comic['series'] }}
            </span>

            <span class="col-3">
                data di uscita:
                {{ $comic['sale_date'] }}
            </span>

            <span class="col-3">
                Tipologia:
                {{ $comic['type'] }}
            </span>
        </div>

    </div>
@endsection
