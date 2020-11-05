<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_controller extends Model
{
    protected $table ='model_controllers';
    protected $fillable = [
        'name',
        
  ];

  public function controller()
  {
      return $this->hasOne('App\Controller');
  }
}
