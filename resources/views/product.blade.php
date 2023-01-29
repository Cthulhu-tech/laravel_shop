@extends('layouts.site')

@section('title')
    Продукт
@endsection

@section('content')
    @foreach($data as $el)
        <h2>{{ $el->name }}</h2>
    @endforeach
@endsection
