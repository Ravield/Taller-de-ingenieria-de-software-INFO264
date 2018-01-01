<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
  protected $primaryKey = 'id';//indicar id
  protected $fillable = ['nombre','tamaño','idcausa'];
}
