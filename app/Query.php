<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = ['nombre','correo','asunto', 'consulta', 'estado'];
}
