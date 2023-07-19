@extends('layouts.layout-main')

@section('content')
    <div class="show container">

        <h1>{{ $comic['title'] }}</h1>
        <div class="row my-5 text-center">
            <span class="col-4">
                serie: <br>
                {{ $comic['series'] }}
            </span>

            <span class="col-4">
                data di uscita: <br>
                {{ $comic['sale_date'] }}
            </span>

            <span class="col-4">
                Tipologia: <br>
                {{ $comic['type'] }}
            </span>
        </div>
        <div class="label">
            {{ $comic['price'] }}
        </div>



        <div class="info">
            <img src="{{ $comic['thumb'] }}" alt="">

            <p>
                {{ $comic['description'] }}
            </p>
        </div>


        <div class="d-flex justify-content-around my-5">
            <div>
                <a class="btn btn-light" href="{{ route('edit', $comic->id) }}">edit</a>
            </div>

            <div>
                <a class="btn btn-light" href="{{ route('home') }}">back to home</a>
            </div>

            <div>
                {{-- <a href="{{ route('delete', $comic->id) }}">delete</a> --}}
                <form method="POST" action="{{ route('delete', $comic->id) }}" {{-- fare la conferma della rumozione --}} {{-- onsubmit="confirm(do you want delete)" --}}>
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-light" type="submit" value="delete">
                </form>

            </div>


        </div>

    </div>
@endsection
