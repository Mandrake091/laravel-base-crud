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
                                <button  class="btn btn-success m-2">Visualizza</button>
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <button class="btn btn-primary m-2">Modifica</button>
                            </a>
                            <form action='{{ route('comics.destroy', $comic->id) }}' method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Sei sicuro di voler eliminare il file?')" id="button" type="submit" class="btn btn-danger m-2">Elimina</button>
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
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection
