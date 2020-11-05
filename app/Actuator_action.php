<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actuator_action extends Model
{
    protected $table ='actuator_actions';
    protected $fillable = [
        'time', 
        'http',   
    ];

    public function actuator()
    {
        return $this->belongsTo('App\Actuator');
    }

}
