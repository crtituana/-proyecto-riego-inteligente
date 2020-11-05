<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='customers';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
 public function controller ()
 {
     return $this->hasMany('App/Controller');
 }

 public function sensor ()
 {
     return $this->hasOne('App/Sensor');
 }
}
