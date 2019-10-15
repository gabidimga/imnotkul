@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle</div>
                <body>

              <br><br><br><br><br>
              <div class="album py-5 bg-light">
                    <div class="detalle">

                            <img class="card-img-top" "justify-content-between align-items-center" src="img/productos/1.png"  alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                              <a class="nav-link" href="{{ route('comprar') }}">{{ __('comprar') }}</a>

                            

                            </div>
                          </div>
                        </div>
