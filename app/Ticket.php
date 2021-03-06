<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table 'tickets';

    protected $fillable = array(
      'es_ganador',
      'fecha_pago',
      'estado',
      'valor'
    );

    protected $hidden = array('created_at', 'updated_at');
    protected $dates = ['deleted_at'];

    public function evento()
    {
      return $this->belongsTo('App\Evento');
    }

    public function vendedor()
    {
      return $this->belongsTo('App\Vendedor');
    }



}
