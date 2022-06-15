@extends('layouts.default')
@section('pageTitle', 'Crea fumetto')


@section('mainContent')
    <h1 class="text-center">Crea nuovo fumetto</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">

           
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
             </div>
        </div>

    </div>
@endsection
