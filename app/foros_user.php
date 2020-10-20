<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foros_user extends Model
{
     protected $table = 'foros_user';

      protected $fillable = [
        'user_id','foros_id','mensaje','created_at',
    ];

     public function foros()
     {
     	return $this->hasMany('App\foros_user');
     }

      public function user()
     {
     	return $this->hasMany('App\User');
     }


}
