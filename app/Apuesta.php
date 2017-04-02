<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
  protected $table 'apuestas';

  protected $fillable = array(
    'local_resultado',
    'visitante_resultado'
  );

  protected $hidden = array('created_at', 'updated_at');
  protected $dates = ['deleted_at'];

  protected function partido()
  {
    return $this->belongsTo('App\Partido');
  }

  protected function ticket()
  {
    return $this->belongsTo('App\Ticket');
  }

  protected function vendedor()
  {
    return $this->belongsTo('App\Vendedor');
  }

}
