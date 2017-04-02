<?php

namespace App;

use App\Usuario as Usuario;

class Publicador extends Usuario
{
  protected $table 'usuarios';
  
  public function eventos()
  {
    return $this->hasMany('App\Eventos');
  }
}
