<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postComments extends Model
{
    //
    protected $table = 'post_comments';

    public function post(){
        return $this->belongsTo('App\post');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
