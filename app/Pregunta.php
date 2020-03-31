<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  protected $primaryKey = "id_preg";
  public function getRespuesta()
  {
      return $this->belongsTo('App\Respuesta', 'respuesta_id', 'id_respuesta');
  }

  public function getCategoria()
  {
      return $this->belongsTo('App\Categorias', 'cat_id', 'id_cat');
  }
}
