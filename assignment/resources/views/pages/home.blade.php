@extends('layouts.mainLayout')
@section('title', 'Domov')
@section('content')
    <main class="container-fluid home-content d-flex justify-content-center align-items-center">
        <div class="home-content-body">
            <section class="row pb-4">
                <h1 class="text-white display-1 d-flex justify-content-center">Vyhľadať v databáze obcí</h1>
            </section>

            <section class="row justify-content-center">
                <form class="search-bar d-flex justify-content-center" action="city" method="get">
                    <input type="text" name="search-city" class="form-control typeahead search-bar-city rounded shadow-lg border-0"
                           data-provide="typeahead" placeholder="Zadajte názov" autocomplete="off">
                </form>
            </section>
        </div>
    </main>
@endsection
