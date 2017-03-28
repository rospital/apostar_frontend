<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario'

    protected $fillable = array(
      'email',
      'nombre',
      'password',
      'tipo'
    );

    protected $hidden = array(
      'password',
      'created_at',
      'updated_at'
    );
    protected $dates = ['deleted_at'];

  }
