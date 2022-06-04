<?php
    $city_exists = True;
    if (is_null($city)) {
        $city_exists = False;
    }
    else {
        $coat_of_arms_arr = explode('\\', $city->coat_of_arms_path);
        $coat_of_arms = end($coat_of_arms_arr);
    }
?>
@extends('layouts.mainLayout')

@if($city_exists)
@section('title', $city->name)
@section('content')
    <main class="container p-0">
        <section class="row" id="detail-obce-heading">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="display-6 m-0 p-3">Detail obce</h1>
            </div>
        </section>

        <div class="container pt-3 pb-5 px-4">
            <section class="row rounded shadow-sm">
                <article class="col-12 col-md-6 detail-obce-list mb-3 mb-md-0 p-5" id="detail-obce">
                    <div class="row">
                        <div class="col bold-text pb-3">Meno starostu:</div>
                        <div class="col pb-3">{{$city->mayor}}</div>
                        <div class="w-100"></div>
                        <div class="col bold-text pb-3">Adresa obecného úradu:</div>
                        <div class="col pb-3">{{$city->city_hall_address}}</div>
                        <div class="w-100"></div>
                        <div class="col bold-text pb-3">Telefón:</div>
                        <div class="col pb-3">{{$city->phone}}</div>
                        <div class="w-100"></div>
                        <div class="col bold-text pb-3">Fax:</div>
                        <div class="col pb-3">{{$city->fax}}</div>
                        <div class="w-100"></div>
                        <div class="col bold-text pb-3">Email:</div>
                        <div class="col pb-3">{{$city->email}}</div>
                        <div class="w-100"></div>
                        <div class="col bold-text pb-3">Web:</div>
                        <div class="col pb-3">{{$city->web_address}}</div>
                        <div class="w-100"></div>
                        <div class="col bold-text pb-3">Zemepisné súradnice:</div>
                        <div class="col pb-3">-</div>
                    </div>
                </article>

                <article class="col-12 col-md-6 d-flex align-items-center justify-content-center p-5">
                    <div class="row ">
                        <div class="col-12 d-flex justify-content-center">
                            <img id="coat-of-arms" alt="coat of arms of {{$city->name}}" src="{{asset('images/'.$coat_of_arms)}}">
                        </div>

                        <h2 class="col-12 d-flex justify-content-center bold-text accent-text pt-3 text-truncate">
                            {{$city->name}}
                        </h2>
                    </div>
                </article>
            </section>
        </div>
    </main>
@endsection

@else
    @section('title', 'Chyba')
    @section('content')
    <main class="container">
        <section class="row p-5">
            <div class="d-flex justify-content-center">
                <h1 class="display-1 m-0">Ľutujeme, zadané mesto sa nenachádza v našej evidencii.</h1>
            </div>
        </section>
    </main>
    @endsection
@endif
