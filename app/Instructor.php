<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gym_no',
    ];

    public function gym(){
        return $this->belongsTo('App\Gym');
    }
}
