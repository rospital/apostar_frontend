<?php

namespace App;

use App\Usuario as Usuario;

class Vendedor extends Usuario
{
  public function tickets()
  {
    return $this->hasMany('App\Ticket')
  }
}
