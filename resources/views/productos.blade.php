@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Im not kul</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">

        <body>

      <br><br><br><br><br>
      <div class="album py-5 bg-light">
            <div class="container">

              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/productos/1.png"  alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                                <a class="nav-link" href="{{ route('detalle') }}">{{ __('detalle') }}</a>
                            <a class="nav-link" href="{{ route('productos') }}">{{ __('comprar') }}</a>

                        </div>
                        <small class="text-muted">$400</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/productos/2.png"  alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="nav-link" href="{{ route('detalle') }}">{{ __('detalle') }}</a>
                      <a class="nav-link" href="{{ route('productos') }}">{{ __('comprar') }}</a>
                        </div>
                        <small class="text-muted">$400</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/productos/3.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="nav-link" href="{{ route('detalle') }}">{{ __('detalle') }}</a>
                      <a class="nav-link" href="{{ route('productos') }}">{{ __('comprar') }}</a>
                        </div>
                        <small class="text-muted">$400</small>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/productos/4.png"  alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="nav-link" href="{{ route('detalle') }}">{{ __('detalle') }}</a>
                      <a class="nav-link" href="{{ route('productos') }}">{{ __('comprar') }}</a>
                        </div>
                        <small class="text-muted">$500</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/productos/5.png"  alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="nav-link" href="{{ route('detalle') }}">{{ __('detalle') }}</a>
                      <a class="nav-link" href="{{ route('productos') }}">{{ __('comprar') }}</a>
                        </div>
                        <small class="text-muted">$500</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="img/productos/5.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">$500</small>
                      </div>
                    </div>
                  </div>
                </div>
        </body>
        <footer class="container py-5">
          <div class="row">
            <div class="col-12 col-md">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
              <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
              <h5>Im not </h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Productos</a></li>
                <li><a class="text-muted" href="#">Preguntas Frecuentes</a></li>
                <li><a class="text-muted" href="#">Contacto</a></li>
                <li><a class="text-muted" href="#">Registrate</a></li>

              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Business</a></li>
                <li><a class="text-muted" href="#">Education</a></li>
                <li><a class="text-muted" href="#">Government</a></li>
                <li><a class="text-muted" href="#">Gaming</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>About</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
              </ul>
            </div>
          </div>
        </footer>
</html>
