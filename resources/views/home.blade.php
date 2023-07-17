@extends('layouts.layout-main')

@section('content')
    <div>
        <a href="{{ route('create') }}">Add New Comic +</a>
    </div>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('show', $comic->id) }}">{{ $comic['title'] }}</a></li>
        @endforeach
    </ul>
@endsection
