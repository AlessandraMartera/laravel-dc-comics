@extends('layouts.layout-main')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic['title'] }}</li>
        @endforeach
    </ul>
@endsection
