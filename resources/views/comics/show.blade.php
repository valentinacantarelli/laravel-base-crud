@extends('layout.base')

@section('pageContent')

<div class="container">
    <h1>{{$comic['title']}}</h1>
    <h3> {{$comic['series']}}</h3>
    <img src="{{$comic['image']}}" alt="">
</div>


@endsection