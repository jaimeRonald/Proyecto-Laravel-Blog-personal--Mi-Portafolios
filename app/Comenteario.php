<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Comenteario extends Model
{

    public function Suscriber()

    {
    	return $this->belongsTo('App\Suscriber',"Suscriber_id");
    }
}

