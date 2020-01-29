<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //One to many relationship between the Event and Resource
    public function event(){
        return $this->belongsTo('App\Event');
    }
}
