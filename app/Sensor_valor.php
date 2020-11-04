<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor_valor extends Model
{
    protected $fillable = [
        'valor',
        'tiempo',
    ];

    public function sensor()
    {
        return $this->belongsTo('App\Sensor');
    }

    
}
