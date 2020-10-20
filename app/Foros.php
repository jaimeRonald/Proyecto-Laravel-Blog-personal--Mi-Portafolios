<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foros extends Model
{
	 protected $table = 'Foros';
     protected $fillable = [
        'titulo', 'contenido','created_at','id',
    ];


    public function usuario()
    {
        return $this->belongsToMany('App\User');
    }

    public function foros_user()
    {
        return $this->hasMany('App\foros_user');
    }
}
