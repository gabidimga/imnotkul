<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function construct (){

    $this->middleware('admin');
  }
  }
   public function admin(){
     return view ('admin');

   }
}
