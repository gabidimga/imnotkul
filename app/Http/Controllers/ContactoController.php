<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class ContactoController extends Controller
{
  public function contacto()
  {
      return view('contacto');
  }

  public function mensaje(Request $req){


    return view("/gracias");
  }
}
