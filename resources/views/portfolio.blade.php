@extends('layout')
@section('title')
Portfolio
@endsection
@section('content')
    <h1>Portfolio</h1>
    <?php foreach ($portfolio as $portfolioItem ) : ?>
     <li>{{$portfolioItem[title]}} </li>
    <?php endforeach?>
@endsection