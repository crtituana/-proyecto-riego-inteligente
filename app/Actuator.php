<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actuator extends Model
{
    protected $table ='actuators';
    protected $fillable = [
        'name',
        'status',
       ];

    public function actuator_action()
    {
        return $this->hasOne('App\Actuator_action');
    }

    public function controller()
    {
        return $this->belongsTo('App\Controller');
    }
}
