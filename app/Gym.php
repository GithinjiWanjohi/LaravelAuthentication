<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $fillable = [
        'gym_name',
        'latitude',
        'longitude',
        'opening_time',
        'closing_time',
    ];

    public function instructor(){
        return $this->hasMany('App\Instructor');
    }
}
