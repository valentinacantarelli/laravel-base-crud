@extends('layout.base')

@section('pageContent')
    <section>
        <div class="container">
            <ul>
               @foreach ($comics as $comic)
               <li>
                   <h3>{{$comic["title"]}}</h3>
                    <p>{{$comic["series"]}}</p>
               </li>
                   
               @endforeach 
            </ul>
        </div>
    </section>
@endsection