<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table 'partidos';

    protected $fillable = array(
      'local',
      'local_resultado',
      'visitante',
      'visitante_resultado'
    );

    protected $hidden = array('created_at', 'updated_at');
    protected $dates = ['deleted_at'];

    protected function evento()
    {
      return $this->belongsTo('App\Evento');
    }
}
