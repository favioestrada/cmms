@extends('layout')
@section('title')
Portfolio
@endsection
@section('content')
    <h1>Portfolio</h1>
    <ul>
        @if($portfolio)
            @foreach ($portfolio as $portfolioItem ) 
                <li>{{$portfolioItem['title']}}</li>
            @endforeach
        @else 
            <li>Ningún proyecto</li>
        @endif
    </ul>
@endsection