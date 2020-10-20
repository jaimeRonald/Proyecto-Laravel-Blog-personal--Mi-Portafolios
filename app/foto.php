<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
	protected $table = 'fotos';
    protected $fillable=['ruta_foto'];

}
