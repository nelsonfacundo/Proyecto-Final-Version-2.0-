<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  public function getRespuesta()
  {
      return $this->belongsTo('App\Respuesta', 'id_respuesta', 'id_respuesta');
  }

  public function getCategoria()
  {
      return $this->belongsTo('App\Categorias', 'id_cat', 'id_cat');
  }
}
