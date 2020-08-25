<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = [
        'user_id', 'channel_id'
    ];

    function user()
    {
        return $this->belongsTo('App\User');
    }
    
    function channel()
    {
        return $this->belongsTo('App\Channel');
    }
}
