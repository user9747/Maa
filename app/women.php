<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class women extends Model
{
    //
    public function emergency(){
        return $this->hasMany('App\emergency');
    }
}
