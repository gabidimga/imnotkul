<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Producto;

class ProductosController extends Controller
{
  public function listado()
  {
      return view('productos');
  }

  public function prueba() {

      $producto= Producto::all();
      $vac = compact("productos");
      return view ("prueba", $vac);
  }
  public function detalle() {


      return view ("detalle");
  }
  public function comprar() {


      return view ("comprar");
  }
}
