<?php

namespace App;

use App\Usuario as Usuario;

class Vendedor extends Usuario
{
  protected $table 'usuarios';
  
  public function tickets()
  {
    return $this->hasMany('App\Ticket');
  }
}
