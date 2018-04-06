<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function postcomments(){
        return $this->hasMany('App\postComments');
    }
}
