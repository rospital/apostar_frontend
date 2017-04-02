<?php

namespace App;

use App\Usuario as Usuario;

class Administrador extends Usuario
{
  protected $table 'usuarios';
  
  public function eventos()
  {
    return $this->hasMany('App\Eventos')
  }
}
