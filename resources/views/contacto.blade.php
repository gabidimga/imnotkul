@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Im not kul</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>

<body>
  <br><br><br><br>
  <div class="contacto">
    <h1 align="center">Escribinos</h1>
  </div>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">

                  <div class="card-body">
                  <form>

    <div>
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control"value = "Nombre"
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Email">

  </div>
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Mensaje</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" value= "Mensaje"></textarea>
    </div>
  <a class="nav-link" href="{{ route('gracias') }}">{{ __('Enviar') }}</a></form>
</body>
</html>
