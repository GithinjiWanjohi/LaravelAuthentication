<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'gym_no',
        'first_name',
        'last_name',
        'email',
    ];

    public function gym(){
        return $this->belongsTo('App\Gym');
    }
}
