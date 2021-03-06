@extends('layouts.default')

@section('pageTitle', 'All Comics')
@section('mainContent')

    <section>

        <h1>Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data rilascio</th>
                    <th scope="col">Miniatura</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row"></th>
                        <td class="d-flex flex-column align-items-center">
                            <h6>{{ $comic->title }}</h6><br>
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <button class="btn btn-success m-2">Visualizza</button>
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <button class="btn btn-primary m-2">Modifica</button>
                            </a>
                            <form id="form">
                                <button onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="btn btn-danger m-2">Elimina</button>
                            </form>
                        </td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td><img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                    </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </section>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="text-dark">Sei sicuro di voler cancellare questo fumetto?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection
