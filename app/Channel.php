<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'name', 'user_id'
    ];

    function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    function user()
    {
        return $this->belongsTo('App/User');
    }
}
