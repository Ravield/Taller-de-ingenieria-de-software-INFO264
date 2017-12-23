<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
  //protected $table = 'nombre_tabla';  en caso de que la tabla no tuviera el nombre en plural
  protected $primaryKey = 'id';//indicar id
  protected $fillable = ['nombre','tipo','resumen', 'client_id'];

  public function client()
    {
      return $this->hasOne('App\Client');
    }

  /*$causes = App\Cause::all();

  foreach ($causes as $cause) {
      echo $cause->nombre;*/
}
