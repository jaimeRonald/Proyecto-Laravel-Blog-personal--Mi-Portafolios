<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     protected $table = 'Categoria';
     protected $fillable = [
        'Nombre'
    ];

    public function foros()
    {
    	return $this->hasMany('App\Foros');
    }


}
