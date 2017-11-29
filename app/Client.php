<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $primaryKey = 'id';//indicar id
  protected $fillable = ['id','nombre','rut','direccion','telefono','correo'];

public function cause()
  {
      //ahora podemos acceder al modelo causa desde cliente
      return $this->hasMany('App\Cause');
      /*porque he seguido las convenciones, eloquent asume que causa tiene un user_id
      si no deberia escribir algo asi
      return $this->hasOne('App\Phone', 'foreign_key');*/
  }


//Obtener datos bd
/*use App\Client;

$clients = App\Client::all();

foreach ($clients as $client) {
  echo $client->nombre;
}*/
}
