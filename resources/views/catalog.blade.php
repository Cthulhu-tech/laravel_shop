@extends('layouts.site')

@section('title')
    Каталог
@endsection

@section('content')
    @foreach($data as $el)
        <a href="/product/{{$el->id}}">
            <h2>{{ $el->name }}</h2>
            <p>{{$el->price}}</p>
        </a>
    @endforeach
@endsection
