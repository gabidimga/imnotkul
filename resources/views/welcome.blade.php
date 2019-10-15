@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Im Not Kul</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
      </head>
      <body>
  <div class="titulo">

  <h1 align="center">IM NOT KUL</h1>
    </div>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/2.png" class="d-block w-100 h-50" alt="...">
      </div>
      <div class="carousel-item active">
        <img src="img/3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item active">
        <img src="img/Sin título.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Im not kul</h5>
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
          <li><a class="text-muted" href="#">Redes Sociales</a></li>
          <li><a class="text-muted" href="#">Twitter</a></li>
          <li><a class="text-muted" href="#">Instagram</a></li>
          <li><a class="text-muted" href="#">Facebook</a></li>
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
      </body>
