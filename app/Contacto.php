<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{

  protected $fillable = [
      'Nombre','Email', 'Mensaje',
  ];
  
  public $table = "contacto";
  public $timestamps=false;
  public $guarded = [];
}
