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
                            <form id="form" action='{{ route('comics.destroy', $comic->id) }}' method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="submit"
                               data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger m-2">Elimina</button>
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




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vuoi eliminare questo fumetto?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection


