@extends('layout.base')

@section('pageContent')
    <section class="main">
        <div class="container">
            <ul>
            @foreach ($comics as $comic)
                <li>
                    <h3>{{$comic["title"]}}</h3>
                    <p>{{$comic["series"]}}</p>
                    <a href="{{route("comics.show", $comic["id"])}}">
                        <button type="button" class="btn">Visualizza</button></a>
                    <a href="{{route("comics.edit", $comic["id"])}}">
                        <button type="button" class="btn">Modifica</button></a>
                </li>
            @endforeach 
            </ul>
        </div>
    </section>
@endsection