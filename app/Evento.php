<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected function usuario()
    {
      return $this->belongsTo('App\Usuario')
    }
}
