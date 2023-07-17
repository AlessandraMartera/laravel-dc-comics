@extends('layouts.layout-main')

@section('content')
    <div class="raccolta">

        @foreach ($comics as $comic)
            <div class="card"><a href="{{ route('show', $comic->id) }}">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h4>
                        {{ $comic['title'] }}
                    </h4>

                    <div>
                        prezzo:
                        {{ $comic['price'] }}
                    </div>
                </a>
            </div>
        @endforeach



    </div>
    <div>
        <a href="{{ route('create') }}">Add New Comic +</a>
    </div>
@endsection
