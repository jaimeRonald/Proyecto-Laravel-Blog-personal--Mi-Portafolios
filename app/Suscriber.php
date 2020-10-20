<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
    protected $fillable=["usuario","contraseña"];


    // de uno  a uno 
    public function Comenteario(){
    	return $this->hasOne("App\Comenteario");// esto es para realcionar con la tabla comentario 
    }
 
    // de uno  a varios 
    public function Comentearios()
    {
        return $this->hasMany('App\Comenteario');

    }
}
