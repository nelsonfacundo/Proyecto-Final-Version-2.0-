<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  protected $primaryKey = "id_preg";
  public function getRespuesta()
  {
      return $this->belongsTo('App\Respuesta', 'id_respuesta', 'id_respuesta');
  }

  public function getCategoria()
  {
      return $this->belongsTo('App\Categorias', 'id_cat', 'cat_id');
  }
}
