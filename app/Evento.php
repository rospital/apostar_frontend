<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  protected $table 'eventos';

  protected $fillable = array(
    'nombre',
    'fecha_inicio',
    'fecha_cierre_apuesta',
    'fecha_cierre_evento',
    'pozo_inicial',
    'pozo_banca'
  );


  protected $hidden = array('created_at', 'updated_at');
  protected $dates = ['deleted_at'];


  // protected function usuario()
  // {
  //   return $this->belongsTo('App\Usuario')
  // }

  protected function administrador()
  {
    return $this->belongsTo('App\Administrador');
  }

  protected function publicador()
  {
    return $this->belongsTo('App\Publicador');
  }

  protected function partidos()
  {
    return $this->hasMany('App\Partido')
  }
}
