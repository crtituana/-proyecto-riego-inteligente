<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table ='sensors';
    protected $fillable = [
        'name',
        'status',
    ];

    public function customer()
 {
     return $this->belongsTo('App/Customer');
 }

 public function controller()
 {
     return $this->belongsTo('App\Controller');
 }

 public function sensor_valor()
 {
     return $this->hasOne('App\Sensor_valor');
 }
 
}
