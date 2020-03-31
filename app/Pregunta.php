<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  protected $primaryKey = "id_preg";
  public function getRespuestas()
  {
      return $this->belongsTo('App\Respuesta', 'id_respuesta', 'id_respuesta');
  }

  public function getCategoria()
  {
      return $this->belongsTo('App\Categorias', 'cat_id', 'id_cat');
  }
}
