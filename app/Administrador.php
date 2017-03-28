<?php

namespace App;

use App\Usuario as Usuario;

class Administrador extends Usuario
{
  public function eventos()
  {
    return $this->hasMany('App\Eventos')
  }
}
