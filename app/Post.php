<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'channel_id', 'category_id'
    ];

    function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    function category()
    {
        return $this->belongsTo('App\Category');
    }

    function likes()
    {
        return $this->hasMany('App\Like');
    }

    function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
