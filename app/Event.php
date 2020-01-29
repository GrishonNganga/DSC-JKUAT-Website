<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //Many to many relationship between the User model and Event model
    public function users(){

        return $this->belongsToMany(User::class);
    }
    //One to many relationship between the Event model and Resource model
    public function resources(){
        $this->hasMany('App\Resource');
    }
}
