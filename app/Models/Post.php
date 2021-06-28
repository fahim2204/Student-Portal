<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    function comments()
    {
        return $this->hasMany('App\Models\Comment', 'fr_post_id', 'id');
    }
    function replys()
    {
        return $this->hasMany('App\Models\Reply', 'fr_post_id', 'id');
    }
    function votes()
    {
        return $this->hasMany('App\Models\Vote', 'fr_post_id', 'id');
    }
    function category()
    {
        return $this->belongsTo('App\Models\Category', 'fr_category_id', 'id');
    }
    function user()
    {
        return $this->belongsTo('App\Models\User', 'fr_user_id', 'id');
    }
}
