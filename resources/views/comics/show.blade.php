@extends('layouts.default')

@section('pageTitle', 'Comic')


@section('mainContent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 500px;">
                <img class="w-25 mx-auto" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prezzo: {{$comic->price}}</li>
                    <li class="list-group-item">Uscita: {{$comic->sale_date}}</li>
                    <li class="list-group-item text-capitalize">Tipo: {{$comic->type}}</li>
                </ul>
            </div>
        </div>
    </div>


@endsection
