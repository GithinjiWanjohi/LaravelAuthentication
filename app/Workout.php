<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = [
        'user_id',
        'workout_type',
        'reps',
        'sets',
        'location',
        'date',
        'time',
    ];

    public function user(){
        return $this->belongTo('App\User');
    }
}
