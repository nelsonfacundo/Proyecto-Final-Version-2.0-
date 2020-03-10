<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    public $table = "mensajes_db";
    public $timestamps = false;
    public $guarded = [];
}
